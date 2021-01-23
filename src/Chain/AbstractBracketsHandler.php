<?php 

namespace App\Chain;

abstract class AbstractBracketsHandler {
    protected $successor;
    public function next(?AbstractBracketsHandler $nextSuccessor) {
        $this->successor = $nextSuccessor;

    }
    abstract function handle($bracketsList, $bracket);
}