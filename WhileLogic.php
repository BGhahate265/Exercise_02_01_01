<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

WhileLogic.php
-->

<head>

    <title>While Logic</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>While Logic</h2>
    <?php
    $counter = 0;
    while ($counter <= 100) {
        $numbers[] = $counter;
        ++$counter;
    }
    foreach ($numbers as $currentNum) {
        echo "$currentNum<br>";
    }
?>
</body>

</html>
