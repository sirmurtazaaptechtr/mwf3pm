<?php
    $name = "Aptech Learning";

    echo "<p>I study at $name</p>";
    echo '<p>I study at $name</p>';

    // String Length
    $len = strlen($name);
    echo "<p>$len</p>";
    
    // Word Count    
    $words = str_word_count($name);
    echo "<p>$words</p>";

    // Search For Text Within a String
    $pos = strpos($name,"e");
    echo "<p>$pos</p>";

    $pos2 = strpos($name,"e",3+1);
    $pos2 = strpos($name,"e",strpos($name,"e")+1);
    echo "<p>$pos2</p>";
    
    // Upper Case    
    $caps = strtoupper($name);
    echo "<p>$caps</p>";
    
    // Lower Case    
    $small = strtolower($name);
    echo "<p>$small</p>";
    
    // Replace String
    $newText = str_replace("Learning","Computer Education",$name);
    echo "<p>$newText</p>";
    
    // Reverse a String
    $rev = strrev($name);
    echo "<p>$rev</p>";

    // Remove Whitespace
    $text = "               Ali             Raza            ";
    echo "<p>$text</p>";
    echo "<pre>$text</pre>";
    
    $cleanText = trim($text);
    echo "<pre>$cleanText</pre>";


