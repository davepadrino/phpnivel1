<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	function sumar($x,$y){
		$x = $x+$y;
		return $x;
	}
	function mayor($x,$y){
		if($x > $y)
			return $x." es mayor que ".$y;
		elseif($x < $y)
			return $y." es mayor que ".$x;
			else
				return "valores iguales";
	}
	echo "hola k ase <br>";
?>
</body>
</html>