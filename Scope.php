<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

Scope.php
-->

<head>

    <title>Scope</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
        <!--Embedded PHP-->
        <h2>Variable Scope</h2>
        <?php
        $globalVariable = "global variable";
        
    function scopeExample() {
        $localVariable = "local variable";
        echo "This is a $localVariable";
    }
    function globalExample() {
        global $globalVariable;
        echo "<p>This is a $globalVariable</p>"
    }
    
    scopeExample();
    echo "<p>This is a $globalVariable</p>";
    globalExample();
        ?>
    </p>
</body>

</html>
