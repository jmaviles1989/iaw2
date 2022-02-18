<!DOCTYPE html>
<html>
<body>

<?php
    $x = 8 - 6.4;
    $y = 1.6;


    echo $x;
    echo "<br>";
    echo $y . "<br>";

    var_dump($x); //Informa sobre el tamaño y tipo de datos de la variable 
    echo "<br>";
    var_dump($y);

    if ($x==$y) {
        echo "iguales";
    } else {  
        echo "distintos";
    }


    echo "<br>";
    var_dump($x==$y);


     //redondeo, se redondea ya que al hacer la resta no es justo el mismo valor.

    echo"<br>";
    $x = round ($x,2);


    var_dump($x==$y);
?>



</body>
</html>