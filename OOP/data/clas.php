<?php 
class Person
{
    var string $name;
    var string $address;
    var string $country;

    function sayHallo(?string $nama){
        if(is_null($nama)){
            echo "Hello, my name is $this->name".PHP_EOL;
        }else{
            echo "Hello $nama, my name is $this->name".PHP_EOL;
        }
    }
}