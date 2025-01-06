<?php
// PHP Operators
// Arithmetic operators

$num1 = 11;
$num2 = 3;

echo "<p>$num1 + $num2 = " . $num1+$num2 . "</p>";
echo "<p>$num1 - $num2 = " . $num1-$num2 . "</p>";
echo "<p>$num1 x $num2 = " . $num1*$num2 . "</p>";
echo "<p>$num1 / $num2 = " . $num1/$num2 . "</p>";
echo "<p>$num1 % $num2 = " . $num1%$num2 . "</p>";
echo "<p>$num1 ^ $num2 = " . $num1**$num2 . "</p>";

// PHP Assignment Operators

$x = "Ali Raza";
$y = $x;
echo "<p>$y</p>";

$x = 5;
$x += 5;// $x = $x +5;
echo "<p>$x</p>";

$x -= 3;
echo "<p>$x</p>";

$x *= 2;
echo "<p>$x</p>";

$x /= 5;
echo "<p>$x</p>";

$x %= 5;
echo "<p>$x</p>";

$x **= 5;
echo "<p>$x</p>";

// PHP Comparison Operators

$x = "12";
$y = 12;

echo "$x == $y --> ";
var_dump($x == $y) ;
echo "<br>";

echo "$x != $y --> ";
var_dump($x != $y) ;
echo "<br>";

echo "$x === $y --> ";
var_dump($x === $y) ;
echo "<br>";

echo "$x !== $y --> ";
var_dump($x !== $y) ;
echo "<br>";

$x = 7;

echo "$x > $y --> ";
var_dump($x > $y) ;
echo "<br>";

echo "$x >= $y --> ";
var_dump($x >= $y) ;
echo "<br>";

echo "$x < $y --> ";
var_dump($x < $y) ;
echo "<br>";

echo "$x <= $y --> ";
var_dump($x <= $y) ;
echo "<br>";

echo "$x <= $y --> ";


$x= 5;
$x++;
echo "<p>$x</p>";

$a = 5;
$b = 10;


// Check if $a is less than $b AND $a is greater than 0
if ($a < $b && $a > 0) {
    echo "Both conditions are true: \$a is less than \$b, and \$a is positive.";
} else {
    echo "One or both conditions are false.";
}

$number = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="num">Enter any Number</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="GO" id="submitBtn" name="submitBtn">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        echo "<h3>Output</h3>";

        $number = $_POST['num'];
        
        if($number%2 == 0) {
            echo "<p>$number is Even</p>";
        }else {
            echo "<p>$number is ODD</p>";
        }
    }
    ?>
</body>
</html>