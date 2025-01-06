<?php
include('Dec042024.php');
// PHP Numbers
$number = 5;
var_dump($number);
echo "<br>";

$number = 2.5;
var_dump($number);
echo "<br>";

$number = "14";
var_dump($number);
echo "<br>";

// PHP Integers
echo "<p>" . PHP_INT_MAX . "</p>";
echo "<p>" . PHP_INT_MIN . "</p>";
echo "<p>" . PHP_INT_SIZE . "</p>";

var_dump(is_int(14));
echo "<br>";
var_dump(is_int(14.7));
echo "<br>";
var_dump(is_int("14"));
echo "<br>";

// PHP Floats
echo "<p>" . PHP_FLOAT_MAX . "</p>";
echo "<p>" . PHP_FLOAT_MIN . "</p>";
echo "<p>" . PHP_FLOAT_DIG . "</p>";

$number = 3.14e400;
var_dump($number);
echo "<br>";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

echo "<pre>";
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo "</pre>";

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

echo "<pre>";
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo "</pre>";

$b = (float)$b;
echo "<pre>";
var_dump($b);
echo "</pre>";
  
echo COMPANY_EMAIL;
?>