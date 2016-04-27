<?php require("conexion.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$cedula= $_POST["cedula"];
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$dia= $_POST["dia"];
$mes= $_POST["mes"];
$anio= $_POST["anio"];
$sexo= $_POST["sexo"];
$email= $_POST["email"];
$login= $_POST["login"];
$clave= $_POST["clave"];

$sql = "INSERT INTO usuario (id,cedula,nombre,apellido,dia,mes,anio,sexo,email,login,clave) VAlUES (NULL,'$cedula','$nombre','$apellido','$dia','$mes','anio','$sexo','$email','$login','$clave')";
//va a contener la consulta a ejecutar

$res = mysqli_query($conn,$sql);

if($res)
	echo "registro exitoso";
else
	echo "el registro fallo";
	
mysqli_close($conn);



?>

</body>
</html>