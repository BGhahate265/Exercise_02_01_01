<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

Concerts.php
-->

<head>

    <title>Concerts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
        <!--Embedded PHP-->
        <?php
        //Implementing an array for the elements for the values of the concerts inserted
        $concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
        $concerts[] = "Bob Dylan";
        $concerts[] = "Joan Jett";
        echo "<p>The following ", count($concerts), " concerts are scheduled.</p><p>";
        echo "$concerts[0]<br>";
        echo "$concerts[1]<br>";
        echo "$concerts[2]<br>";
        echo "$concerts[3]<br>";
        echo "$concerts[4]<br>";
        echo "$concerts[5]<br>";
        echo "$concerts[6]</p>";
        
        echo "<pre>";
        print_r($concerts);
        echo "</pre>";
        echo "<pre>";
        var_dump($concerts);
        echo "</pre>";
        ?>
    </p>
</body>

</html>
