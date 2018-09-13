<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

HelloWorld.php
-->

<head>

    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
        <!--Embedded PHP-->
        <?php
        //Addition
        $x = 100;
        $y =200;
        $returnValue = $x + $y;
        echo '<p>$returnValue after addition: ', $returnValue, "</p>";
        // modulus
        $x = 3;
        $y =2;
        $returnValue = $x % $y;
        echo '<p>$returnValue after addition: ', $returnValue, "</p>";
        //Compound Assignment
        $x = 3;
        $y = 2;
        $x = $x + $y;
        //top is same as the bottom line of code
        $x += $y;
        $x++;
        echo '<p>$returnValue after addition: ', $x, "</p>";
        //Capination with compound assignment in text strings
        $x = "hello ";
        $y ="world";
        $x .= $y;
        echo '<p>$returnValue after addition: ', $x, "</p>";
        ?>
    </p>
</body>

</html>
