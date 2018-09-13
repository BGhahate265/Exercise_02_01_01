<!doctype html>
<html lang="en">

<!--
Project 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

DaysArray.php
-->

<head>

    <title>Days Array</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>
        <!--Embedded PHP-->
        <?php
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturaday");

        echo "<p>The days of the week in English are:<br>";
        echo "$days[0] ";
        echo "$days[1] ";
        echo "$days[2] ";
        echo "$days[3] ";
        echo "$days[4] ";
        echo "$days[5] ";
        echo "$days[6] </p>";
        //Seperator for the second margin of the days of week but in French 
        echo "<p>The days of the week in French are:<br>";        
        echo $days[0] = "Dimanche ";
        echo $days[1] = " Lundi";
        echo $days[2] = " Mardi";
        echo $days[3] = " Mercredi";
        echo $days[4] = " Jeudi";
        echo $days[5] = " Vendredi";
        echo $days[6] = " Samedi</p>";
        ?>
    </h2>
</body>

</html>
