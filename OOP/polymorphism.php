<?php
require_once "./data/Programmer.php";

$company = new Company();
$company->programmer=new Programmer("Marsel");
var_dump($company);
$company->programmer=new BackendProgrammer("Marsel");
var_dump($company);
$company->programmer=new FrontEndProgrammer("Marsel");
var_dump($company);

sayHelloProgramer(new Programmer("Marsel"));
sayHelloProgramer(new BackendProgrammer("Dinda"));
