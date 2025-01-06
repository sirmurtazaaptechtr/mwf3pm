<?php

// PHP Continue

for($cnt = 1; $cnt <= 10; $cnt++) {
    if($cnt%2 != 0) {
        continue;
    }
    echo "<p>$cnt</p>";
}

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

MyFun();
MyFun();

Greetings("Jannat");
Greetings("Madiha");
Greetings("Ramsha");
Greetings("Basit");

ShowBio("Ramsha",26);