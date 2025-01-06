<?php

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

echo "<p>SUM = " . subTotal(1,1,2,3,4,5) . "</p>";
echo "<p>Average = " . subTotal(2,1,2,3,4,5) . "</p>";
echo "<p>Max = " . subTotal(3,1,2,3,4,5) . "</p>";
echo "<p>Min = " . subTotal(4,1,2,3,4,5) . "</p>";