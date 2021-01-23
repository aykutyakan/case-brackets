<?php

namespace App\Brackets;

class SquareBrackets implements IBrackets {
	
	private $openTag = "[";
	private $closeTag = "]";
	private $activeTag;

	function __construct($activeTag)
	{
		$this->activeTag = $activeTag;
	}
	public function getOpenTag() {
		return $this->openTag;
	}
	public function getCloseTag() {
		return $this->closeTag;
	}
	public function isCloseTag()
	{
		return $this->activeTag == $this->closeTag ? true : false;
	}
	public function getActiveTag() {
		return $this->activeTag;
	}
}