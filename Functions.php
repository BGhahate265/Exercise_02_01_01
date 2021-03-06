<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

Functions.php
-->

<head>

    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>
        <!--Embedded PHP-->
        <?php
        function incrementByValue($countByValue) {
            ++$countByValue;
            echo "<p>incrementByValue() value is $countByValue </p>";            
        }
        function incrementByValue(&$countByReference) {
            ++$countByReference;
            echo "<p>incrementByReference() value is $countByReference </p>";            
        }
        $count = 1;
        echo "<p>Main prgram starting value is $count.</p>";
        incrementByValue($count);
        echo "<p>Main program ending value is $$count.</p>"
        ?>
        <h2>Default Arguments</h2>
        <?php
            function paint($room="office", $color="red") {
            return "<p>The color of the $room is $color.</p>";
        }
        echo paint();
        echo("bedroom", "blue");
        ?>
    </h2>
</body>

</html>
