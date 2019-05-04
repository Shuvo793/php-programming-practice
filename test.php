<?php

class shuvo {
    function svo(){
        echo "hi shuvo";
    }
}
class daknam{
    static $name;
    public static function getIndex(){
        if (!self::$name){
            self::$naem = new shuvo();
        }
        return self::$name;
    }
}
class shuvo{
    function svo(){
        echo "hi moin";
    }
}
$amarName = new amarName();
$amarName->svo();
