<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

PHPCodeBlocks.php
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
        echo "This text is displayed using standard PHP script.<br>";
        print "Second String. <br>";
        print ("Third String");
        echo "<h1> This is a" , " multiple argument string</h1>";
        echo ("<h1> This is another" . " multiple argument string</h1>");
        print("<h2>This is some math: " . (2 + 3) . "</h2>");
        ?>
    </p>
</body>

</html>
