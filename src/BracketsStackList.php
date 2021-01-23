<?php

namespace App;

use App\Brackets\IBrackets;

class BracketsStackList{

	private $collectionBrackets;
	function __construct()
	{
		$this->collectionBrackets = array();
	}
	public function push(IBrackets $item)
	{
		$this->collectionBrackets[] = $item;
	}
	public function pop()
	{
		return array_pop($this->collectionBrackets);
	}
	public function peek() {
		if(!$this->isEmpty()){
			return end($this->collectionBrackets);
		}else 
			return null;
	}
	
	public function isEmpty() {
        return empty($this->collectionBrackets);
    }
	
	public function size() {
		return !$this->isEmpty() ? count($this->collectionBrackets) : 0;
	}

}