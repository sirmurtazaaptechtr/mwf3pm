<?php
function pr($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";    
}

$names = ["Madiha","Jannat","Rose","Ujala"];
$student = ["name"=>"Madiha Pervaiz","dob"=>"27-July-2006","gender"=>"Female"];
$students = [
    ["name"=>"Madiha Pervaiz","dob"=>"27-July-2006","gender"=>"Female"],
    ["name"=>"Jannat Korai","dob"=>"11-Aug-2002","gender"=>"Female"],
    ["name"=>"Rose Mary","dob"=>"05-Feb-2003","gender"=>"Female"],
    ["name"=>"Ujala Tariq","dob"=>"18-Apr-2004","gender"=>"Female"]

];

$names[0] = "Madiha Prevaiz";
$names[2] = "Rose Mary";

array_push($names,"Abdul Basit");// add item in the end
// array_unshift($names,"Abdul Basit");// add item at start
// array_splice($names,2,0,"Abdul Basit");// add item in the middle

// array_pop($names);// remove item from end
// array_shift($names);// remove item from start
// array_splice($names,2,1);// remove 1 item at index 2

// sort($names); //ascending order
// rsort($names);// descending order

foreach($names as $name) {
    echo "<p>$name</p>";
}
echo "<hr>";

// ksort($student);
// krsort($student);
// asort($student);
arsort($student);

foreach($student as $key=>$value) {
    echo "<p><b>$key</b> : $value</p>";
}
echo "<hr>";

array_splice($students,2,0,[["name"=>"Abdul Basit","dob"=>"8-Feb-2007","gender"=>"Male"]]);

// pr($students);

foreach($students as $student) {
    foreach($student as $key=>$value) {
        echo "<p><b>$key</b> : $value</p>";
    }
    echo "<hr>";
}

?>