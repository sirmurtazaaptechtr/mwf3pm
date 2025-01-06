<?php
    // echo "<p>Syed Murtaza Hussain</p>";
    // echo "<p>Syed Murtaza Hussain</p>";
    // echo "<p>Syed Murtaza Hussain</p>";
    // echo "<p>Syed Murtaza Hussain</p>";
    // echo "<p>Syed Murtaza Hussain</p>";

    for($cnt = 1; $cnt <= 5; $cnt++) {
        echo "<p>$cnt. Syed Murtaza Hussain</p>";
    }

    for($cnt = 5; $cnt >= 1; $cnt--) {
        echo "<p>$cnt. Syed Murtaza Hussain</p>";
    }

    $cnt = 1;
    while($cnt <= 5) {
        echo "<p>$cnt. Syed Murtaza Hussain</p>";
        $cnt++;
    }

    $cnt = 5;
    do {
        echo "<p>$cnt. Syed Murtaza Hussain</p>";
        $cnt--;
    }while($cnt >= 1);


    $tab = 2;

    for($cnt = 1; $cnt <= 10; $cnt++) {
        echo "<p>$tab X $cnt = " . $tab*$cnt . "</p>";
    }

    $number = 23;
    $isPrime = true;

    for($dvr = 2; $dvr < $number; $dvr++) {
        if($number%$dvr == 0) {
            $isPrime = false;
            break;
        }
    }

    if($isPrime) {
        echo "<p>$number is PRIME</p>";
    }else {
        echo "<p>$number is not PRIME</p>";
    }