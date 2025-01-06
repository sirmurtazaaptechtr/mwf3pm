<?php
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
?>
