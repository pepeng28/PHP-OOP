<?php

require_once "data/Person.php";

$person = new Person("el" , "jawa");
$person->name = "el";
$person->address = "jawa";
//$person->country = "indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("akmal" , null);
$person2->name = "akmal";
$person2->address = null;

var_dump($person2);

//error
//$person2->name = [];
