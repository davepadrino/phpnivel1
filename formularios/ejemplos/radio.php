<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	echo "Seleccionaste.{$_GET['resp']}<br>";
	$a = $_GET['resp'];
	$a = $a +5;
	echo "<br>".$a ."<br>";
	if($_GET["resp"] == 4){
		echo "<br>Tu respuesta es correcta";
	}else{
		echo "<br>Tu respuesta es incorrecta, el valor es 4";
	}
	
	
?>
</body>
</html>