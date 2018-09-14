<!doctype html>
<html lang="en">

<!--
Exercise 02_01_01
Author: Braddock Ghahate
Date: 09.10.18

IsEven.php
-->

<head>

    <title>Is Even</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>
        <!--Embedded PHP-->
        <?php
        $numbers = array(2, 4, 7, 3, 8, 0, 1);
        echo check($numbers[1]);
        function check($number){
	    if($number % 2 == 0){
		echo "$number is even"; 
	    }
	    else{
		echo "$number is odd";
	}
}
//        for ($x = ; $x <= $numbers[6]; $x++) {
//        echo "";
} 

?>

    </h2>
</body>

</html>
