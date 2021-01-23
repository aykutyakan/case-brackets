<?php

namespace App\Brackets;

interface IBrackets{

	public function getOpenTag();
	public function getCloseTag();
	public function isCloseTag();
	public function getActiveTag();
	/* 
	protected $open;
	protected $close;
	protected $activeTag;
	// abstract function setOpenTag();
	
	// abstract function setCloseTag ();
	public function getOpenTag() {
		return $this->open;
	}
	public function getCloseTag() {
		return $this->close;
	}
	public function isCloseTag()
	{
		return $this->activeTag == $this->close ? true : false;
	}
	public function getActiveTag() {
		return $this->activeTag;
	}
	abstract function setOpenTag();
	abstract function setCloseTag();

	*/
}