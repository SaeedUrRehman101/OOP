<?php

abstract class A{

    protected $a;
    protected $b;

    public function __construct($val1,$val2){
        $this->a = $val1;
        $this->b = $val2;
    }

    abstract protected function calc($a,$b);
}

class B extends A{
    public function calc($a,$b){
        echo "Sum of $this->a & $this->b is " . $a+$b . "<br>";
    }

    public function sum(){
        echo $this->a + $this->b;
    }

}

$Obj = new B(10,20);
$Obj->calc(10,20);
$Obj->sum();

?>