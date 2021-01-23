<?php 
 
namespace App\Chain;

use App\Singleton\SingletonBracketProcess;

class CheckIsFirstBracket extends AbstractBracketsHandler{
    private $limit = 10;
    public function handle($list, $bracket)
    {
        if($list->size() > 0)
            return $this->successor ? $this->successor->handle($list, $bracket) : null;
        else if($list->size() == 0 && $bracket->isCloseTag()) {
            SingletonBracketProcess::setMessage("Başarısız ilk eleman");
            return null;
        }else {
            return null;
        }
    }      
}