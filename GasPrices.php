<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

GasPrices.php
-->

<head>

    <title>Gas Price</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Gas Prices</h2>
    <?php
    $gasPrice = 8;
    if ($gasPrice >= 2 && $gasPrice <= 3) {
            //if the condition meets the logic
        echo "<p>Gas price are between $2.00 and $3.00</p>";
    }
    else
        //otherwise, it'll execute this line of code
        echo "<p>Gas price is not between $2.00 and $3.00</p>";
    }
    ?>
</body>

</html>
