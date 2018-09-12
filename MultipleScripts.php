<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

MultipleScripts.php
-->

<head>

    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>PHP Environment Info</h1>
    <p>This page was rendered with
        <?php
        echo phpversion();
        
        ?>
    </p>
    <p>This page was rendered with Zend Engine version
        <?php
    echo zend_version();
        ?>
    </p>
    <p>PHP's default MIME type is
        <?php
    echo ini_get("default_mimetype");
        ?>
    </p>
    <p>The maximum allowed execution time of a PHP script is
        <?php
    echo ini_get("max_execution_time");
        ?>
    </p>
</body>

</html>
