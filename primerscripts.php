<!DOCTYPE html>
<html>
<body>

<?php

    $a = 1.23456789;
    $b = 1.23456780;
    $epsilon = 0.00001;

    echo $a - $b;
    var_dump($a - $b);


    if (abs($a - $b) < $epsilon) {
     	echo "true";
     };

?>




</body>
</html>