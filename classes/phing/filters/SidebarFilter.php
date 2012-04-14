<?php

require_once 'phing/filters/BaseParamFilterReader.php';
require_once 'phing/filters/ChainableReader.php';

class SidebarFilter extends BaseParamFilterReader implements ChainableReader {

	private $template = '';

	public function read($len = null) {

		if (!$this->getInitialized()) {
			$this->_initialize();
			$this->setInitialized(true);
		}

		$buffer = $this->in->read($len);
		if ($buffer === -1)
			return -1;

		$buffer = str_replace('%%SIDEBAR%%', file_get_contents($this->template), $buffer);

		return $buffer;
	}

	public function chain(Reader $reader) {
		return new SidebarFilter($reader);
	}

	private function _initialize() {
		$params = $this->getParameters();
		if ($params !== null) {
			for ($i = 0; $i < count($params); $i++) {
				if ('template' === $params[$i]->getName()) {
					$this->template = $params[$i]->getValue();
					break;
				}
			}
		}
	}

}