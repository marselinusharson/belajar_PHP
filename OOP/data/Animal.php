<?php
namespace Data;

abstract class Animal
{
    public string $name;

    abstract function run():void;
}

class Cat extends Animal
{
    public function run():void
    {
        echo "cat $this->name is running". PHP_EOL;
    }
}
class Dog extends Animal
{
    public function run():void
    {
        echo "dog $this->name is running". PHP_EOL;
    }
}