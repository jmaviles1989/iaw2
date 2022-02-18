<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

   <?php
   //Definición de variables.

    $a = 1.23456789;
    $b = 1.23456780;
    $epsilon = 0.00001;

    echo $a - $b;
    var_dump($a - $b);


    //sentencia if de condición

     if (abs($a-$b) < $epsilon) {
     	echo "true"
     };

   ?> 


</body>
</html>