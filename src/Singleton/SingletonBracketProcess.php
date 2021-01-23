<?php 

namespace App\Singleton;

class SingletonBracketProcess {
    private static $message = null; 
    public static function setMessage($message){
        self::$message = $message;
    }
    public static function getMessage()
    {
        return self::$message;
    }
}