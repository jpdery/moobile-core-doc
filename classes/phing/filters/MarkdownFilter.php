<?php

require_once 'classes/markdown/Markdown.php';
require_once 'phing/filters/BaseParamFilterReader.php';
require_once 'phing/filters/ChainableReader.php';

class MarkdownFilter extends BaseParamFilterReader implements ChainableReader {

	private $decorator = null;

	function read($len = null) {

		if (!$this->getInitialized()) {
			$this->_initialize();
			$this->setInitialized(true);
		}

		$buffer = $this->in->read($len);
		if ($buffer === -1)
			return -1;

		$vars = array();
		$vars['title'] = 'Moobile.' . basename($this->in->getResource());
		$vars['content'] = markdown($buffer);

		ob_start();
		include $this->decorator;
		$out = ob_get_contents();
		ob_get_clean();

		return $out;
	}

	public function chain(Reader $reader) {
		return new MarkdownFilter($reader);
	}

	private function _initialize() {
		$params = $this->getParameters();
		if ($params !== null) {
			for ($i = 0; $i < count($params); $i++) {
				if ('decorator' === $params[$i]->getName()) {
					$this->decorator = $params[$i]->getValue();
					break;
				}
			}
		}
	}

}