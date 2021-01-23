<?php

namespace App;

use App\Chain\BracketsMaxSize;
use App\Chain\CheckHasBrackets;
use App\Chain\CheckIsFirstBracket;
use App\Chain\CheckToogleBrackets;
use App\Character\Factory\GenerateBrackets;
use App\Singleton\SingletonBracketProcess;

class BracketsManagmanet{
    private $bracketsList;
    private $validate;
    private $failure=false;
    function __construct()
	{
        $this->bracketsList = new BracketsStackList();
        $this->initializeValidation();
    }
    private function initializeValidation()
    {
        $firstValidate = new CheckHasBrackets();
        $secondValidate = new BracketsMaxSize();
        $thirdValidate = new CheckIsFirstBracket();
        $fourtyValidate = new CheckToogleBrackets();
        $thirdValidate->next($fourtyValidate);
        $secondValidate->next($thirdValidate);
        $firstValidate->next($secondValidate);
        
        $this->validate = $firstValidate;
    }
    
    public function add(string $brackets)
    {   
        if($this->check() ){
            $bracketInstance = GenerateBrackets::buildBracketsInstance($brackets);
            $this->validate->handle($this->bracketsList, $bracketInstance);
            if($this->check()) {
                if($bracketInstance->isCloseTag())  
                    $this->bracketsList->pop();
                else 
                    $this->bracketsList->push($bracketInstance);   
            }
        }
    }
    
    public  function check() 
    {
        return  SingletonBracketProcess::getMessage() == null  ? true : false;
        
    }
    public function message():string
    {
        return SingletonBracketProcess::getMessage() ?? 'Başarılı';
    }
}