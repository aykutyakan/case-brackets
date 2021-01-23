<?php

namespace App;

class Container{
	
	public function start()
	{
		$str = "{[]}[{}({})]";
		$this->charControl($str);
	}

	private function charControl($str)
	{
		$bracketsManagment = new BracketsManagmanet();
		for($i= 0; $i <strlen($str); $i++ ){
			$bracketsManagment->add($str[$i]);
			if(!$bracketsManagment->check())
				break;
		}
		echo $bracketsManagment->message();
	}
	
}