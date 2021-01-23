<?php 

namespace App\Validate;

use App\Singleton\SingletonBracketProcess;

class BracketsMaxSize extends AbstractBracketsHandler{
    private $limit = 10;
    public function handle($list, $bracket)
    {
        if($list->size() < $this->limit){
            return $this->successor->handle($list, $bracket)  ?? null;
        }
        else {
            SingletonBracketProcess::setMessage("Çok Fazla kapanmamış parantez var");
            return null;
        }
    }  
}