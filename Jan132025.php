<?php 

function pr($data) {    
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Global Variables - Superglobals</h1>
    <h2>$GLOBALS</h2>
    <?php pr($GLOBALS);?>

    <h2>$_SERVER</h2>
    <?php pr($_SERVER);?>

    <h1>Regular Expression</h1>
    <?php
    $str = "bat";
    $pattern = '/^[a-z]{1,2}at$/';

    echo preg_match($pattern,$str);
    ?>


    <script>
        let str = "coat";

        const pattern = /^[a-z]{1,2}at$/;

        console.log(pattern.test(str));



    </script>    
</body>
</html>