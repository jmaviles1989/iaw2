<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php	


$i = 0;

$resul = 0;

for($i=1;$i<=100;$i++) {
	if (($i % 2) == 1) {
	  echo $i . "<br>";
      $resul = $resul + $i;
	}
}
echo "$resul";


?>


</body>
</html>>