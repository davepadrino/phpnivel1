<?php   
	require("conexion.php");
	$id = $_POST["id"];
	
	//consulta que busca todos los datos asociados a él
	
	$sql = " select * from usuario where id='$id'";
	
	$res = mysqli_query($conn,$sql);
	
	$registro = mysqli_fetch_array($res);
	list($id,$cedula,$nombre,$apellido,$dia,$mes,$anio,$sexo,$email) = $registro;
	mysqli_close($conn);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modificar Usuario</title>
</head>

<body>
	<div align="center"> <b> Datos de usario: </b> </div>
    	<form name="form1" method="post" action="actualizar_usuario.php">
        	<table width="25%" border="0" align="center" cellpadding="2" cellspacing="2">
            	<tr>
                	<td>id: </td>
                    <td> <input name="id" type="text" value="<?php echo $id; ?>" size="5" readonly="readonly" /> </td>
                </tr>
            	<tr>
                	<td>cedula: </td>
                    <td> <input name="cedula" type="text" value="<?php echo $cedula; ?>" size="15"  /> </td>
                </tr>            	<tr>
                	<td>nombre: </td>
                    <td> <input name="nombre" type="text" value="<?php echo $nombre; ?>" size="30"  /> </td>
                </tr>            	<tr>
                	<td>apellido: </td>
                    <td> <input name="apellido" type="text" value="<?php echo $apellido; ?>" size="30"  /> </td>
                </tr>
                <tr>
                	<td>dia: </td>
                    <td> <input name="dia" type="text" value="<?php echo $dia; ?>" size="15"  /> </td>
                </tr>
                <tr>
                	<td>mes: </td>
                    <td> <input name="mes" type="text" value="<?php echo $mes; ?>" size="15"  /> </td>
                </tr>
                <tr>
                	<td>anio: </td>
                    <td> <input name="anio" type="text" value="<?php echo $anio; ?>" size="15"  /> </td>
                </tr>
                <tr>
                	<td>sexo: </td>
                    <td> <input name="sexo" type="text" value="<?php echo $sexo; ?>" size="50"  /> </td>
                </tr>
            	<tr>
                	<td>email: </td>
                    <td> <input name="email" type="text" value="<?php echo $email; ?>" size="50"  /> </td>
                </tr>

                
                <tr>
                	<td colspan="2"><hr/> </td>
                </tr>
                <tr>
                	<td colspan="2"> <input type="submit" name="submit" value="Continuar >" /> </td>
                </tr>
            </table>
        </form>   
                
</body>
</html>