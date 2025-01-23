<?php

class Access_Modifier{

    protected $name;
    public function __construct($n){
        $this->name = $n;
    }

    protected function Base(){
        echo "Hello from Base function!";
    }

}

class Child extends Access_Modifier{
    public function show(){
        echo $this->name . "<br>";
    }

    public function derive(){
        $this->Base();
    }

}

$Obj = new Child("Saeed");
$Obj->show();
$Obj->derive();

?>
