<?php 

namespace App\Brackets\Factory;

use App\Brackets\Brackets;
use App\Brackets\CurlyBrackets;
use App\Brackets\IBrackets;
use App\Brackets\SquareBrackets;

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