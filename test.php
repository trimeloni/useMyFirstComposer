<?php

require_once "vendor/autoload.php";

$myClass = new myFirstComposer\TestClass();
$myResult = $myClass->FindMe();

print_r($myResult);


