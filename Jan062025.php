<?php
declare(strict_types=1); // strict requirement

// Global variable: This variable is accessible throughout the script, 
// but not inside functions unless explicitly made global.
$name = "Abdul Basit";

function updateName ($updatedName) {
    global $name;
    $name = $updatedName;
}

// Function definition: Local variable scope
function myFun() {
    // Local variable: This variable exists only within this function.
    $age = 20;
    return $age; // Returns the local variable
}

// Function definition: Local variable scope
function myNumber() {
    // Local variable: This variable is created each time the function is called.
    $number = 0;
    $number++; // Increment the local variable
    echo "<p>$number</p>"; // Prints the incremented value
}

// Function definition: Static variable scope
function theNumber() {
    // Static variable: Retains its value between function calls.
    static $number = 0;
    $number++; // Increment the static variable
    echo "<p>$number</p>"; // Prints the incremented value
}

function addNumbers (float $num1, float $num2) {
    $sum = $num1 + $num2;
    echo "<p>$num1 + $num2 = $sum</p>";
}

updateName("Ali Raza");

// Attempting to access global and local variables
// `$age` is not accessible here because it is defined as a local variable inside myFun().
// This will generate an error or undefined variable notice.
echo "$name you are $age years old."; // will generate error

// Correct way: Using the return value of the function
echo "$name you are " . myFun() . " years old.";

// Calling myNumber() twice: Each call creates a new `$number` variable, so it always starts from 0.
myNumber(); // Output: 1
myNumber(); // Output: 1

// Calling theNumber() twice: `$number` retains its value between calls due to the `static` keyword.
theNumber(); // Output: 1
theNumber(); // Output: 2


addNumbers(12,6);
//addNumbers(12,"Six");

// PHP Arrays
// Indexed array

$students = ["Abdul Basit","Madiha","Jannat","Rose","Ujala"];
$students = array("Abdul Basit","Madiha","Jannat","Rose","Ujala");

echo "<p>" . $students[3] . "</p>";

// Associative Array

$student = ["Name"=>"Abdul Basit","Age"=>18];

echo "<p>Name : " . $student["Name"] . "</p>";
echo "<p>Age : " . $student["Age"] . "</p>";

// Associative Array (outer Array is indexed and inner Array is Associative)
$students = [
    ["Name"=>"Abdul Basit","Age"=>18],
    ["Name"=>"Madiha Pervaiz","Age"=>18],
    ["Name"=>"Jannat Korai","Age"=>22],
    ["Name"=>"Rose Mary","Age"=>21],
    ["Name"=>"Ujala Tariq","Age"=>20]
];

echo "<p>Name : " . $students[0]["Name"] . "</p>";
echo "<p>Age : " . $students[0]["Age"] . "</p>";

foreach($students as $student) {
    echo "<p> Name : " . $student['Name'] . "</p>";
    echo "<p> Age : " . $student['Age'] . "</p>";
}

?>
