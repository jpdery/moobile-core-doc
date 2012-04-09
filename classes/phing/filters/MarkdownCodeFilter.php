<?php

require_once 'classes/markdown/Markdown.php';
require_once 'phing/filters/BaseParamFilterReader.php';
require_once 'phing/filters/ChainableReader.php';

class MarkdownCodeFilter extends BaseParamFilterReader implements ChainableReader {

	private $decorator = null;

	function read($len = null) {

		$buffer = $this->in->read($len);
		if ($buffer === -1)
			return -1;

		$document = new DOMDocument();
		$document->loadHTML($buffer);

		$elements = $document->getElementsByTagName('pre');
		foreach ($elements as $element) {
			$element->setAttribute('class', 'prettyprint');
		}

		return $document->saveHTML();
	}

	public function chain(Reader $reader) {
		return new MarkdownCodeFilter($reader);
	}

}