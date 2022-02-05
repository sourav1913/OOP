<?php

class per{
    //properties
    public $nam = "Sourav";
    public $age = 22;

    //methods
    public function mynam(){
        return "This is my full name";
    }

    public function hello($name){
        return "Hello," .$name;
    }
}
//Create Object
$per = new per;
//resulation(->)
    echo $per->nam."\n";
    echo $per->mynam()."\n";
    echo $per->hello('Sourav')."\n";

class num{
    private $b = 30;

    function ab(){
        echo "First class method \n";
    }
    function ac(){
        echo "ac = ". $this->b;
    }

}
    $numclass = new num();

    $numclass->ab();
    $numclass->ac();

    echo "\n";

//Construct
class str{
     public $a = 10;

     public function __construct()
     {
         echo "This is __constructor!";
     }
}
$strclass = new str();
echo "\n";

class des{
    public $b = 20;
    public function __construct()
    {
        echo "This is a constructor! \n";
    }
    public function __destruct()
    {
        echo "This is a destructor!";
    }
}

$desclass = new des();
echo $desclass->b ."\n";

echo "\n";
class human{
    public $name;
    public $age;

    public function __construct()
    {
        echo "I am a constructer! \n";
    }

    function person(){
        echo "My name Somir. I am 21 years old! \n";
    }
}
$person1 = new human();

$person1->person();

echo "\n";

class add{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
    }
    function person(){
        echo "My name is {$this->name}. I am {$this->age} years old! \n";
    }
}

$addclass = new add("Sourav", "21");
$addclass->person();
echo "\n";

//Inheritance
class x{
    public $name;
    function parent(){
        echo "This is Parent Class \n";
    }
}

class y extends x{
    function child(){
        echo "This is Child Class \n";
    }
}

$y = new y();
$y->parent();

$y->name = "Mahim \n";
echo $y->name;

echo "\n";
//Protected

class c{
    protected $name ="SB \n";

    function parent(){
        echo "Parent Class $this->name";
    }
}

class d extends c{
    function child(){
        echo "Child Class!";
    }
}

$d = new d();
$d->parent();

echo "\n";

class car{
    public function wheel(){
        echo "This is a wheel! \n";
    }
    public function door(){
        echo "It's Four Dorrs!\n";
    }
}

class bmw extends car{
    function color(){
        echo "Blue Color BMW! \n";
    }
}

class volvo extends car{
    function color(){
        echo "Black Color volvo! \n";
    }
}

$v = new volvo();
$v->color();
$v->wheel();
$v->door();

echo "\n";

$bmw = new bmw();
$bmw->color();
$bmw->wheel();

echo "\n";

$car = new car();
$car->wheel();
$car->door();

echo "\n";

class ONE{
    const PI = 3.1416 ."\n";

    public function wheel(){
        echo "This is 4 wheel! \n";
    }

    public static function door(){
        echo "This ia" .self::PI. " Doors! \n";
    }
}

$ONE = new ONE();
echo ONE::PI;
echo ONE::door();

echo "\n";

abstract class TWO{
    const PI = 3.1416 ."\n";

    abstract function ab();

    public function wheel(){
        echo "This is 4 wheel! \n";
    }

    public static function door(){
        echo "This ia" .self::PI. " Doors! \n";
    }
}

class voo extends TWO{
    function ab(){

    }
    function color(){
        echo "White Color voo \n";
    }
}
$TWO = new voo();
$TWO->door();

echo "\n";

trait Ball{
    public function red(){
        echo "This is red Color! \n";
    }
    public static function blue(){
        echo "This is blue Color! \n";
    }
}
class Bat{

    function color(){
        echo "Pink color Bat! \n";
    }
}

$Ball = new Bat();
$Ball->color();