<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	echo "seleccionaste una computadora ".$_GET["compu"]."con: ";
	$dispo = $_GET["dispo"];
	$cont=0;
	while($cont<count($dispo)){
		echo "<br>".$dispo[$cont];
		$cont++;
	}

?>
</body>
</html>