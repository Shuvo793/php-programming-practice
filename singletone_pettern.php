<?php

//example 1

class Car{
    private $numberPlate;
    function __construct(){
        $this->numberPlate = "G ".mt_rand(1,1000);
    }
    function honk(){
        echo "Pip Pip. The Numberplate is {$this->numberPlate} \n";
    }
}
// main operation in this part
class RentACar{
    static $obj;
    public static function getCar(){ // this function must be static because this function use of one
        // Don't create a new Car if it's already available 
        if(!self::$obj) {
            self::$obj = new Car();// self holo static er jonno this er motoe
        }
        return self::$obj;
    }
}
class Passanger1{
    function ride(){
        echo "I am Passanger 1. \n";
        $myCar = RentACar::getCar();
        $myCar->honk();
    }
}
class Passanger2{
    function ride(){
        echo "I am Passanger 2. \n";
        $myCar = RentACar::getCar();
        $myCar->honk();
    }
}
$p1 = new Passanger1();
$p1->ride();
$p2 = new Passanger2();
$p2->ride(); 

//example 2

 class name{
     private $n;
     function __construct(){
            $this->n="shuvo";
     }
    function bu(){
         return $this->n ;
     }
 }
 // main operation in this part
 class daknam{
     static $obj;
     public static function getIndex(){
         if (!self::$obj){
             self::$obj = new name();
         }
         return self::$obj;
     }
 }
 class rafiq{
      function a(){
         $result = daknam::getIndex()->bu();
          echo 'I am rafiq dak nam '.$result."\n";
         
          
         
     } 
 }
 class suvo{
     function a(){
        
        $result = daknam::getIndex()->bu();
          echo $result.' amar dak nam';
    } 
}
$rafiq = new rafiq();

$rafiq->a();

$suvo = new suvo();
$suvo->a();
