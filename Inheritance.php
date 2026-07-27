<?php

require_once "data/Manager.php";

$Manager = new Manager();
$Manager->name = "el";
$Manager->sayHello("mun");

$vp = new VicePresident();
$vp->name = "akmal";
$vp->sayHello("mun");
