<?php require("conexion.php");
	$sql = "Select * from usuario ";
	$res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Usuarios</title>
</head>

<body>
	<div align="center" >
    	 <b> Seleccione el usuario a modificar: </b>
    </div>
   	<form name = form1 method="post" action="modificar_usuario.php" >
    <table width ="25%" border ="0" align="center" cellpadding="2" cellspacing="2">
  
<?php
	while($registro = mysqli_fetch_array($res)) //,MYSQL_ASSOC
	{
		list($id,$cedula,$nombre,$apellido,$dia,$mes,$anio,$sexo,$email,$login,$clave) = $registro;
?>
	<tr>
        <td> <input type='radio' name='id' value='<?php echo $id; ?>' />
            <?php echo $nombre." ".$apellido;?>
        </td>
    </tr>
    <?php
	}
	mysqli_close($conn);
	?>
<tr>
<td> <hr /></td>
</tr>
<tr>
	<td> <input type="submit" name="submit" value="Continuar &raquo;" /> </td>
</tr>
</table>
</form>
</body>
</html>