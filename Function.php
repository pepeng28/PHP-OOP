<?php

require_once "data/Person.php";

$el = new Person();
$el->name = "el";

$el->sayHello("akmal");

$akmal = new Person();
$akmal->name = "akmal";

$akmal->sayHello(null);


