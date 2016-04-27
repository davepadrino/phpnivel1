<?php 
	require("conexion.php");
	$id=$_POST["id"];
	$cedula=$_POST["cedula"];
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$dia=$_POST["dia"];
	$mes=$_POST["mes"];
	$anio=$_POST["anio"];
	$sexo=$_POST["sexo"];
	$email=$_POST["email"];
	//($id,$cedula,$nombre,$apellido,$dia,$mes,$anio,$sexo,$email);
	
	$query = "UPDATE usuario SET cedula='$cedula',nombre='$nombre',apellido='$apellido',email='$email',dia='$dia',mes='$mes',anio='$anio',sexo='$sexo' where id='$id'";
	$res=mysqli_query($conn,$query);
	
	mysqli_close($conn);
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8859-1" />
<title>Actualizar Usuario</title>
</head>

<body>
	<div align="center" <b> Datos del usuario: </b> <br />
    <?php if($res){  ?>
		<font color = "#FF0000" size="2" face="Arial, Helvetica, sans-serif">
		<strong> Los datos han sido modificados exitosamente! </strong> </font>
    <?php }else{ ?>
		<font color = "#FF0000" size="2" face="Arial, Helvetica, sans-serif">
		<strong> Los datos NO han sido modificados exitosamente! </strong> </font>
    <?php }?>
	</div><br />
    <table width="25%" border="0" align="center" cellpadding="2" cellspacing="2">
		<tr>
			<td>id: </td>
			<td> <?php echo $id; ?> </td>
        </tr>
		<tr>
			<td>cédula: </td>
			<td> <?php echo $id; ?> </td>
        </tr>		<tr>
			<td>nombre: </td>
			<td> <?php echo $nombre; ?> </td>
        </tr>		<tr>
			<td>apellido: </td>
			<td> <?php echo $apellido; ?> </td>
        </tr>		<tr>
			<td>día: </td>
			<td> <?php echo $dia; ?> </td>
        </tr>		<tr>
			<td>mes: </td>
			<td> <?php echo $mes; ?> </td>
        </tr>		<tr>
			<td>año: </td>
			<td> <?php echo $anio; ?> </td>
        </tr>		<tr>
			<td>sexo: </td>
			<td> <?php echo $sexo; ?> </td>
        </tr>		<tr>
			<td>email: </td>
			<td> <?php echo $email; ?> </td>
        </tr>
       </table>
  
</body>
</html>