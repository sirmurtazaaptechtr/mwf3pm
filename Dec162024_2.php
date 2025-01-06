<?php
$favcolor = "white";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

$alpha = 'a';

switch($alpha) {
    case "A": 
    case "a": 
    case "E": 
    case "e": 
    case "I": 
    case "i": 
    case "O": 
    case "o": 
    case "U": 
    case "u":
        echo "<p>$alpha is Vowel</p>" ;
    break;
    default:
        echo "<p>$alpha is Consonant</p>" ;
}