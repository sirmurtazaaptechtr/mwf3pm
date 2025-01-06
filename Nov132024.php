<?php
    $name = "Jannat Korai";

    echo "<p>$name is a hardworking student.</p>";
    echo '<p>$name is a hardworking student.</p>';

    // String Functions
    // 1. String Length
    $len = strlen($name);
    echo "<p>\"$name\" has $len characters in it.</p>";

    // 2. Word Count
    $words = str_word_count($name);
    echo "<p>\"$name\" has $words words in it.</p>";
    /* Another Method */
    echo "<p>\"$name\" has " . str_word_count($name) . " words in it.</p>";

    // 3. Search For Text Within a String
    $text = "Jannat is a good student she works very hard to get good marks in her exams and she always get good grades.";

    $pos = strpos($text,"good");
    echo "<p>$pos</p>";

    $pos = strpos($text,"good",strpos($text,"good")+1);
    echo "<p>$pos</p>";

    // PHP - Modify Strings
    // 1. Upper Case
    $caps = strtoupper($name);
    echo "<p>$caps</p>";

    // 2. Lower Case
    $small = strtolower($name);
    echo "<p>$small</p>";
    
    // 3. Replace String
    $madihaString = str_replace("Jannat","JANNAT",$text);
    echo "<p>$madihaString</p>";

    // 4. Reverse a String

    $rev = strrev($name);
    echo "<p>$rev</p>";

    $x = "   Hello World!   ";
    echo "<pre> $x </pre>";
    echo "<pre>" . trim($x) . "</pre>";

    // 5. Convert String into Array

    $myText = 'Madiha, Zayan, Jannat, Ujala, Abdul Basit';
    $myArr = explode(", ",$myText);

    echo "<pre>";
    print_r($myArr);
    echo "</pre>";

    $partName = explode(" ",$name);

    echo "<pre>";
    print_r($partName);
    echo "</pre>";
?>