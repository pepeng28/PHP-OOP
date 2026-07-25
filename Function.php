<?php

require_once "data/Person.php";

$el = new Person("el" , "jawa");
$el->name = "el";

$el->sayHello("akmal");

$akmal = new Person("akmal" , "jakarta");
$akmal->name = "akmal";

$akmal->sayHello(null);

$el->info();
$akmal->info();
