<?php

interface parent1{
    function sum($val1,$val2);
}
interface parent2{
    function sub($val3,$val4);
}

class child implements parent1,parent2{
    public function sum($a,$b){
        echo $a + $b . "<br>" ;
    }
    public function sub($c,$d){
        echo $c - $d ;
    }
}

$Obj = new child();
$Obj->sum(12,78);
$Obj->sub(15,8);

?>