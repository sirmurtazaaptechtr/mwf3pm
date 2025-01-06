<?php
// PHP Math
$x = pi();
echo "<p>$x</p>";

echo "<p>" . pi() . "</p>";

echo "<p>" . min(0, 150, 30, 20, -8, -200) . "</p>";
echo "<p>" . max(0, 150, 30, 20, -8, -200) . "</p>";

echo "<p>" . abs(-12) . "</p>";

echo "<p>" . sqrt(121) . "</p>";

echo "<p>" . round(0.69) . "</p>";
echo "<p>" . round(0.44) . "</p>";

echo "<p>" . rand() . "</p>";
echo "<p>" . rand(0,9) . "</p>";

// PHP Constants

define("COMPANY_NAME","Aptech Learning");
define("COMPANY_ADDRESS","435/C/2, PECHS Block 2 Commercial, Tariq Road Karachi.");

const COMPANY_EMAIL = "info@aptech-education.com.pk";

echo "<p>" . COMPANY_NAME . "</p>";
echo "<p>" . COMPANY_ADDRESS . "</p>";
echo "<p>" . COMPANY_EMAIL . "</p>";

echo "<p>" . __FILE__ . "</p>";
echo "<p>" . __DIR__ . "</p>";
echo "<p>" . __LINE__ . "</p>";

// PHP Operators