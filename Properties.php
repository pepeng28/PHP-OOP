<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "el";
$person->address = "jawa";
$person->country = "indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person();
$person2->name = "akmal";
$person2->address = "jakarta";
$person2->country = "indonesia";

var_dump($person2);
