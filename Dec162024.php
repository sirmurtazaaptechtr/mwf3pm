<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
            <label for="number">Enter test Marks</label>
            <input type="number" name="number" id="number">
            <input type="submit" value="ok">
        </form>
        <?php
        $marks = '';
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $marks = $_POST['number'];
            
            $percentage = $marks / 75 * 100;
            
            echo "<p><b>Percentage : </b>".round($percentage)."%</p>";
            
            if ($percentage >= 40) {
                echo "<p><b>Status : </b>PASS</p>";
            } else {
                echo "<p><b>Status : </b>FAIL</p>";
            }
            
            if ($percentage >= 80) {
                echo "<p><b>Grade :</b> A+</p>";
            } elseif ($percentage >= 70) {
                echo "<p><b>Grade :</b> A</p>";
            } elseif ($percentage >= 60) {
                echo "<p><b>Grade :</b> B</p>";
            } elseif ($percentage >= 50) {
                echo "<p><b>Grade :</b> C</p>";
            } elseif ($percentage >= 40) {
                echo "<p><b>Grade :</b> D</p>";
            } else {
                echo "<p><b>Grade :</b> F</p>";
            }
        }
        ?>
    </div>
</body>

</html>