<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	function mayor($x,$y){
		if($x > $y)
			return $x." es mayor que ".$y;
		elseif($x < $y)
			return $y." es mayor que ".$x;
			else
				return "valores iguales";
	}
	
	echo mayor(7,8);
	
	
		$a = 5;$b = 10;
	//por valor
	function sumar($x,$y){
		$x = $x+$y;
		return $x;
	}
	
	//por referencia
	function sumar2(&$x,&$y){
		$x = $x+$y;
		return $x;
	}
	
	function restar($x,$y = 2){
		$x = $x - $y;
		return $x;	
	}
	
	//para usar globales
	$f=12;$c=5;
	function restarG(){
		global $f,$c;
		$f = $f - $c;
		return $f;	
	}
	//
	restarG();
	echo "el valor es ".$f."<br>";
	sumar2($a,$b);
	echo "el valor es ".$a."<br>";
	restar($a,$b);
	echo $a."<br>";
	echo "el valor es ".restar($a,$b)."<br>";
	
	function contador(){
		static $count =0;
		$count = $count +1;
		return $count;
	}
	echo contador()."<br>";
	echo contador()."<br>";
	echo contador()."<br>";
		

?>
</body>
</html>