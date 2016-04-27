<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	//manera informal
	$ciudad[]="Caracas";
   	$ciudad[]="Valencia ";
    $ciudad[]="Sevilla";
            
    //formal
    $pais = array("Venezuela","Italia","Francia");
	echo $pais[0]."<br>";
		
	$ciudad[4]="Maracaibo";
	echo $ciudad[2]."<br>";
	
	//devuelve cantidad de valores
	$cantidad = count($pais);
	for($i=0;$i < $cantidad; $i++)
		echo $pais[$i]."<br>";
		
	$cosas = array(1=>"Regla",6,3.5,5=>"Vasos");
	echo $cosas[5]."<br>";
	
	$visitas["lunes"]=200;
	$visitas["martes"]=186;
	
	//o con
	
	$visitas = array("lunes" =>200,"martes" =>186,"miercoles"=>190,"jueves"=>175);
	reset($visitas); //puntero al primer elento
	
	while(list($clave,$valor) = each($visitas))
		echo "el dia $clave ha tenido $valor visitas <br>";
		
	echo "<br><br>";
	$calendario[]=array(1,"enero",31);
	$calendario[]=array(2,"febrero",28);
	$calendario[]=array(3,"marzo",31);
	$calendario[]=array(1,"abril",30);
	$calendario[]=array(1,"mayo",31);
	//foreach($visitas as $pos=>$valor)
	while(list($clave,$valor) = each($calendario))
	{
		$cadena = $valor[1];
		$cadena.=" es el mes número ".$valor[0];
		$cadena.=" y tiene ".$valor[2]. "días <br>";
		echo $cadena;
	}
	
	foreach($calendario as $clave =>$valor)
		echo "<br> $clave $valor[1] es el mes $valor[0] tiene $valor[2] días <br>";
		
		
			
		
		
		
?>




</body>
</html>