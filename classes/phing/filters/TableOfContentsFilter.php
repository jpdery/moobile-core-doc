<?php

require_once 'phing/filters/BaseParamFilterReader.php';
require_once 'phing/filters/ChainableReader.php';

class TableOfContentsFilter extends BaseParamFilterReader implements ChainableReader {

	function read($len = null) {

		$buffer = $this->in->read($len);
		if ($buffer === -1)
			return -1;

		$document = new DOMDocument();
		$document->loadHTML($buffer);
		$this->generate_toc($document);

		return $document->saveHTML();
	}

	public function chain(Reader $reader) {
		return new TableOfContentsFilter($reader);
	}

	public function generate_toc(DOMDocument $dom) {

        // setup xpath, this can be factored out
        $xpath = new DOMXPath($dom);
        $xpath->registerNamespace('html', "http://www.w3.org/1999/xhtml");

        // test for ToC container, if not present don't bother
        $container = $xpath->query("//div[@id='toc']")->item(0);
        if (!$container) return;

        $content = $dom->getElementById('content');
		if (!$content) {
			throw new Exception('The document does not have a content element');
		}

        // grab all headings h2 and down from the document
        $headings = array('h2', 'h3');
        foreach ($headings as $k => $v) $headings[$k] = "name()='$v'";
        $query_headings = implode(' or ', $headings);
        $query = "//div[@id='content']//*[$query_headings]"; // looks like "//*[self::html:h2 or ...]"
        $headings = $xpath->query($query);

        //var_dump($headings->length);
        //exit;

        // setup the table of contents element
        $toc = $dom->createElement('ul');
        $container->appendChild($dom->createElement('h2', 'Table of Contents'));
        $container->appendChild($toc);

        // iterate through headings and build the table of contents
        $current_level = 2;
        $parents = array(false, $toc);
        $indexes = array(0);
        $i = 0;
        foreach ($headings as $node) {
            $level = (int) $node->tagName[1];
            $name  = $node->textContent; // no support for formatting

            while ($level > $current_level) {
                if (!$parents[$current_level-1]->lastChild) {
                    $parents[$current_level-1]->appendChild(
                        $dom->createElement('li')
                    );
                }
                $sublist = $dom->createElement('ul');
                $parents[$current_level - 1]->lastChild->appendChild($sublist);
                $parents[$current_level] = $sublist;
                $current_level++;
                $indexes[$current_level - 2] = 0;
            }

            while ($level < $current_level) {
                unset($indexes[$current_level - 2]);
                $current_level--;
            }

            $indexes[$current_level - 2]++;

            $line = $dom->createElement('li');
            $label = $dom->createElement('span', implode('.', $indexes) . '.');
            $link = $dom->createElement('a', $name);

            // setup the anchors
            $header_id = $node->getAttribute('id');
            $link->setAttribute('href', '#' . $header_id);

            $line->appendChild($link);
            $parents[$current_level-1]->appendChild($line);

        }
	}
}