<?php
class Static_members{
    public static $name = "Ali";

    public static function Name(){
        echo self::$name;
    }

}


// $Obj = new Static_members;
// $Obj->Name();

// echo Static_members::$name;
// echo Static_members::Name();

// -------------------------------------------- 

// OVERRIDE IN STATIC MEMBERS;

// class overside{
//     public static $name = "Saeed";

//     public function __construct($n){
//        echo self::$name = $n . "<br>"; //overriding static members
//     }

// }

// $Obj = new overside("Abdul Basit");

// -------------------------------------------- 

// INHERITANCE IN STATIC MEMBERS;

// class inheritance extends overside{
//     public function show(){
//         echo parent::$name . "<br>";
//     }
// }

// $Object = new inheritance("Ali");
// $Object->show();

// -------------------------------------------- 

// LATE STATIC BINDING; just yahi diffrence hai k jis class ka object create kary gay usi k member ko set kary ga 

class late_static{
    public static $name = "Ali";

    public function show(){
        echo static::$name;
    }

}

class child extends late_static{
    public static $name = "Saeed";
}

$Object = new child(); 
$Object->show();

?>