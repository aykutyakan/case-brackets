<?php 

namespace App\Character\Factory;

use App\Character\Brackets;
use App\Character\CurlyBrackets;
use App\Character\IBrackets;
use App\Character\SquareBrackets;

class GenerateBrackets {
    public static function buildBracketsInstance($char): ?IBrackets
    {
        $instance = null;
        switch($char){
            case '{':
                $instance = new CurlyBrackets('{');
                break;   
            case '}':
                $instance = new CurlyBrackets('}');
                break;
            case '[':
                $instance = new SquareBrackets('[');
                break;
            case ']':
                $instance = new SquareBrackets(']');
                break;
            case '(':
                $instance = new Brackets('(');
                break;   
            case ')':
                $instance = new Brackets(')');
                break;
            default: 
                $instance = null;
                break;
        }
        return $instance;
            
    }
}