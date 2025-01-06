<?php 
    // This is a single-line comment
    
    # This is also a single-line comment

    /* 
    This is a
    multi-line comment 
    */

    $name = "Zayan Khalil";
    $name = "Ramsha Javaid";
    $age = 19;
    $age = 26;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $name;?></title>
</head>
<body>
    <?php 
        // echo "<h1>Welcome to Php</h1>";
        # echo "<h1>Welcome to Php</h1>";
        /* echo "<h1>Welcome to Php</h1>"; */
        
        echo "<h1>$name - Welcome to Php</h1>";// H1 tag
        echo "<p>Dear $name, You are $age years old.</p>";

        echo "<p>Hello</p>";
        //same as:
        echo("<p>Hello</p>");

        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";

        $x = print("<p>Hello by print</p>");
        echo "<p>value returned by print is $x</p>";

        $data = "Aptech Learning";
        var_dump($data);
        echo "<p>$data</p>";

        $data = 16;
        var_dump($data);
        echo "<p>$data</p>";

        $data = 14.7;
        var_dump($data);
        echo "<p>$data</p>";

    ?>
</body>
</html>