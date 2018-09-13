<!doctype html>
<html lang="en">

<!--
Project 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

InterestArray.php
-->

<head>

    <title>Interest Array</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>
        <!--Embedded PHP-->
        <?php
        $interestRates = array(.0725, .0750, .0775, .0800, .0825, .0850, .0875);
        echo "<p>Here are the ", count($interestRates), " interest values.</p><p>";
        echo "$interestRates[0]<br>";
        echo "$interestRates[1]<br>";
        echo "$interestRates[2]<br>";
        echo "$interestRates[3]<br>";
        echo "$interestRates[4]<br>";
        echo "$interestRates[5]<br>";
        echo "$interestRates[6]</p>";
        ?>
    </h1>
</body>

</html>
