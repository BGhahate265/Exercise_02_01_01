<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

HelloWorld2.php
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
        define("WORLD_INFO", 928970000);
        define("SUN_INFO", 72000000);
        define("MOON_INFO", 3456);
        $sunInfo = 72000000;
        $moonInfo = 3456;
        
        echo "<p>Hello $worldVar<br>";
        echo "The $worldVar is ", number_format(WORLD_INFO, 0), " miles from the $sunVar.<br>";
        echo "Hello ", $sunVar, "!<br>";
        echo "The $sunVar's core temperature is approximately ", number_format(SUN_INFO, 2), "degrees Fahrenheit.<br>";
        echo "Hello ", $moonVar, "!<br>";
        echo "The $moonVar is ", number_format(MOON_INFO, 0), " miles in diameter.</p>";
        

        ?>
    </p>
</body>

</html>
