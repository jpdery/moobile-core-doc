<?php

require_once 'phing/filters/BaseParamFilterReader.php';
require_once 'phing/filters/ChainableReader.php';

class MarkdownLinkFilter extends BaseParamFilterReader implements ChainableReader {

	public function read($len = null) {

		$buffer = $this->in->read($len);
		if ($buffer === -1)
			return -1;

		$buffer = str_replace('.md"', '.html"', $buffer);

		return $buffer;
	}

	public function chain(Reader $reader) {
		return new MarkdownLinkFilter($reader);
	}

}