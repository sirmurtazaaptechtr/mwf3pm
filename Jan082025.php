<?php
function pr($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";    
}

$names = ["Madiha","Jannat","Rose","Ujala"];
$student = ["name"=>"Madiha Pervaiz","dob"=>"27-July-2006","gender"=>"female"];
$students = [
    ["name"=>"Madiha Pervaiz","dob"=>"27-July-2006","gender"=>"female"],
    ["name"=>"Jannat Korai","dob"=>"11-Aug-2002","gender"=>"female"],
    ["name"=>"Rose Mary","dob"=>"05-Feb-2003","gender"=>"female"],
    ["name"=>"Ujala Tariq","dob"=>"18-Apr-2004","gender"=>"female"]

];

pr($names);
echo $names[3];
foreach($names as $name) {
    echo "<p>$name</p>";
}

pr($student);
echo $student['dob'];
foreach($student as $key=>$value) {
    echo "<p><b>$key</b> : $value</p>";
}

pr($students);
pr($students[2]);
pr($students[2]['name']);
foreach($students as $student) {
    foreach($student as $key=>$value) {
        echo "<p><b>$key</b> : $value</p>";
    }
}
