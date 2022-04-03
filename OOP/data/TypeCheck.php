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
    if($programmer instanceof BackendProgrammer){
        echo "Hello backend Programer $programmer->name". PHP_EOL;    
    }else if($programmer instanceof FrontEndProgrammer){
        echo "Hello Frontend Programer $programmer->name". PHP_EOL;    
    }else if($programmer instanceof Programmer){
        echo "Helo Programer $programmer->name". PHP_EOL;    
    }
}