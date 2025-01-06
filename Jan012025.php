<?php

// PHP Functions
function MyFun () {
    echo "<p>I is Fun to Learn Php</p>";
}

function Greetings ($name) {
    echo "<h3>Dear $name</h3>";
    echo "<p>How do you do?</p>";
}

function ShowBio ($name,$age) {
    echo "<h3>Dear $name</h3>";
    echo "<p>You are $age Years old.</p>";
}

function SayHi() : string {
    return "Hi There";
}

function Squarer($number) : float {
    $square = $number * $number;
    return $square;    
}

function PlaceOrder ($itemname, $unitprice, $qty = 1) {
    $total = $unitprice * $qty;
    echo 
    "<table border=\"1\" width=\"50%\">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Unit Price</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$itemname</td>
                <td>PKR $unitprice/=</td>
                <td>$qty</td>
                <td>PKR $total/=</td>
            </tr>
        </tbody>
    </table><br><br>";    
}

function sumofvalues(...$numbers) : float {
    $sum = 0;

    foreach($numbers as $number) {
        $sum += $number;
    }
    
    return $sum;
}

function GreetMultiple (...$names) {
    foreach($names as $name) {
        echo "<h3>Dear $name</h3>";
        echo "<p>How do you do?</p>";
    }
}

function subTotal($funNum,...$values) {
    $retVal = $sum = $avg = $max = $min = 0;
    foreach($values as $value) {
        $sum += $value;
    }
    switch($funNum) {
        case 1:            
            $retVal = $sum;
        break;
        case 2:
            $avg = $sum/count($values);
            $retVal = $avg;
        break;
        case 3:
            $max = max($values);
            $retVal = $max;
        break;
        case 4:
            $min = min($values);
            $retVal = $min;
        break;

    }
    return $retVal;
}

// MyFun();
// MyFun();

// Greetings("Jannat");
// Greetings("Madiha");
// Greetings("Ramsha");
// Greetings("Basit");

// ShowBio("Ramsha",26);

// $res = SayHi();
// echo $res;

echo "<p><strong>" . SayHi() . "!</strong></p>";

$num = 11;
echo "<p>The square of $num is " . Squarer($num) . "</p>";
$num = 17;
echo "<p>The square of $num is " . Squarer($num) . "</p>";
$num = 9;
echo "<p>The square of $num is " . Squarer($num) . "</p>";

PlaceOrder("Zinger Burger",550,12);
PlaceOrder("Zinger Burger",550);

// Variable Number of Arguments

echo "<p>" . sumofvalues(1,2) . "</p>";
echo "<p>" . sumofvalues(1,2,3,4,5,6,7,8,9) . "</p>";

GreetMultiple("Ali Raza");
GreetMultiple("Basit", "Madiha", "Jannat");

echo "<p>SUM = " . subTotal(1,1,2,3,4,5) . "</p>";
echo "<p>Average = " . subTotal(2,1,2,3,4,5) . "</p>";
echo "<p>Max = " . subTotal(3,1,2,3,4,5) . "</p>";
echo "<p>Min = " . subTotal(4,1,2,3,4,5) . "</p>";