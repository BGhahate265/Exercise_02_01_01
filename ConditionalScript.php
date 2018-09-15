<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

ConditionalScript.php
-->

<head>

    <title>Conditional Script</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Conditional Script</h2>
    <!--Embedded PHP-->
    <?php
    $intVariable = 75;
    $result = "";
    ($intVariable > 100) ? $result = "$intVariable is greater than 100":
    $result = "$intVariable is less than or equal to 100"; 
    echo "<h3>$result: ". "$result</h3>";
?>

</body>

</html>
