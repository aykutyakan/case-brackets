<?php 

namespace App\Chain;

use App\Singleton\SingletonBracketProcess;

class CheckToogleBrackets extends AbstractBracketsHandler {
    
    public function handle($list, $bracket)
    {
        if( $bracket->isCloseTag() && $list->peek()->getCloseTag() != $bracket->getCloseTag() ) 
        {
                SingletonBracketProcess::setMessage("Başarısız");
                return null;
        } else {
            return $this->successor ? $this->successor->handle($list, $bracket) : null;
        }
    }    
}