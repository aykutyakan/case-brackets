<?php 

namespace App\Validate;

use App\Singleton\SingletonBracketProcess;

class CheckHasBrackets extends AbstractBracketsHandler{
    public function handle($list, $bracket)
    {
        if($bracket == null ) 
        {
            SingletonBracketProcess::setMessage("Başarısız");
            return null;
        }
        return $this->successor ? $this->successor->handle($list, $bracket) : null;
    }     
}