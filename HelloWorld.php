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
        //Global Variables
        $worldVar = "world";
        $sunVar = "Sun";
        $moonVar = "Moon";
        $worldInfo = 928970000;
        $sunInfo = 72000000;
        $moonInfo = 3456;
        
        echo "<p>Hello $worldVar<br>";
        echo "The $worldVar is $worldInfo miles from the $sunVar.<br>";
        echo "Hello ", $sunVar, "!<br>";
        echo "The $sunVar's core temperature is approximately $sunInfo degrees Fahrenheit.<br>";
        echo "Hello ", $moonVar, "!<br>";
        echo "The $moonVar is $moonInfo miles in diameter.</p>";
        
        echo "This a {$moonVar}embedded in double quotes.<br>";
        //Deliberate error of declaration of a variable
        echo "This a $moonVarembedded in double quotes.<br>";
        ?>
    </p>
</body>

</html>
