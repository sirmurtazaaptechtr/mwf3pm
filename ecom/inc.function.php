<?php

function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";    
}

function prx ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";    
    die();
}

function test_input($input) {
    $input = htmlspecialchars($input);
    $input = stripcslashes($input);
    $input = trim($input);

    return $input;
}