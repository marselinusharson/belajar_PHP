<?php 
class Person
{
    // constant nempel ke class
    const SUHU = "Marselinus Harson Rewo";

    var string $name;
    var string $address;
    var string $country ="Indonesia";

    //constructor
    function __construct(string $name, ?string $addres){
        $this->name = $name;
        $this->address =$addres;
    }
    // destructor
    function __destruct(){
        echo "object person $this->name is destroyed".PHP_EOL;
    }

    function sayHallo(?string $nama){
        if(is_null($nama)){
            echo "Hello, my name is $this->name".PHP_EOL;
        }else{
            echo "Hello $nama, my name is $this->name".PHP_EOL;
        }
    }

    function info(){
        echo "SUHU :".self::SUHU.PHP_EOL;
    }
}