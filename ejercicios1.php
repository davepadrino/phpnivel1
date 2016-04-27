<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicios Nulos </title>
</head>

<body>
<?php
	//ejercicio 3 , página 24
	$inicial=3;
	for($num=1;$num <=10; $num++){
		echo $inicial*$num."<br>";
	}
	//ejercicio 4 , página 24
	echo "<br><br>";
	$inicial = 5;
	$cont=1;
	for ($num=1; $num<=$inicial;$num++){
		$cont= $cont * $num;
	}
	echo $cont."<br>";
	
	
	//ejercicio 5 , página 24
	$lim1 = 1; $lim2 = 100;
	echo "<br><br>";
	for($num = $lim1; $num <= $lim2; $num++){
		$primo = true;
		for($div=2 ; $div <= sqrt($num); $div++){
			if($num%$div == 0){
				$primo = false;
				break;
			}
		}
		if($primo) {
			echo $num."<br>";
		}
	}
			 
	
?>


</body>
</html>