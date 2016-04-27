<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Capitales de Vzla</title>
</head>

<body>
<?php
	$capital = array("valencia","la asunción","ciudad bolívar");
	/*
	for($counter =0;$counter <3;$counter++){
		if($counter == $_POST["estado"])
			echo "la capital del estado seleccionado es: ".$capital[$_POST["estado"]]." opcion: ".$_POST["estado"];
	}
	*/
	echo "la capital del estado seleccionado es: ".$capital[$_POST["estado"]]
?> 
</body>
</html>