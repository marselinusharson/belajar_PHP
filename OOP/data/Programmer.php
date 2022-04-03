<?php

class Programmer
{
    public string $name;
    
    public function __construct(string $name)
    {
        $this->name=$name;
    }
}

class BackendProgrammer extends Programmer
{

}

class FrontEndProgrammer extends Programmer
{

}

class Company
{
    public Programmer  $programmer;
}
function sayHelloProgramer(Programmer $programmer)
{
    echo "Hello Programer $programmer->name". PHP_EOL;    
}