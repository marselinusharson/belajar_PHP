<?php
require_once "./data/TypeCheck.php";

$company = new Company();
$company->programmer=new Programmer("Marsel");
$company->programmer=new BackendProgrammer("Marsel");
$company->programmer=new FrontendProgrammer("Marsel");

sayHelloProgramer(new Programmer("Marsel"));
sayHelloProgramer(new FrontendProgrammer("Dinda"));
sayHelloProgramer(new BackendProgrammer("Dinda"));
