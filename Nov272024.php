<?php
// PHP - Concatenate Strings
// String Concatenation
$txt1 = "Aptech";
$txt2 = "Learning";

$txt3 = $txt1 . " " . $txt2;

echo "<p>$txt3</p>";

echo "<p>$txt1 $txt2</p>";

// PHP - Slicing Strings
$name = "Abdul Basit";
$name = "Rose Mary";
$name = "Ujala Tariq";
$name = "Ramsha Javaid";
$name = "Jannat Korai";
$name = "Ali Raza";

$pos = strpos($name," ");

echo "<p>$pos</p>";

// $firstName = substr($name,0,5);
$firstName = substr($name,0,strpos($name," "));
// $lastName = substr($name,6);
$lastName = substr($name,strpos($name," ")+1);

echo "<p>Full Name : $name<br>First Name : $firstName<br>Last Name : $lastName</p>";

echo "<p>\"$name\" is my student</p>";
?>