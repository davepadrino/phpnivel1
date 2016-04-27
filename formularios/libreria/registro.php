<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8859-1" />
<title>Insertar Registro</title>
</head>

<body>
	<form action="insertar_usuario.php" method="post">
    <table align="center" cellpadding="2" cellspacing="2"  border="1">
    	<tr>
        	<td colspan="2" align="center"> <h4> Registro Usuario </h4> </td>
        <tr>
        	<td> Nombre: </td> 
            <td> <input name="nombre" type="text" maxlength="40" /> </td>
            
        </tr>
        <tr>
        	<td> Apellido: </td> 
            <td> <input name="apellido" type="text"  maxlength="40" /> </td>
        </tr>
    	<tr>
        	<td> login: </td> 
            <td> <input name="nombre" type="text" maxlength="20" /> </td>
        </tr>
    	<tr>
        	<td> password: </td> 
            <td> <input name="clave" type="text"  maxlength="20" /> </td>
        </tr>
        <tr>
        	<td colspan="2" align="center">
            	<input name="submit" type="submit"  value="Registrar"  />
                <input name="reset" type="reset" value="Limpiar" />
     </table>
    </form>
    	<form action="insertar_editorial.php" method="post">
        
    <br /> <br />
     <table align="center" cellpadding="2" cellspacing="2" border="1">
    	<tr>
        	<td colspan="2" align="center"> <h5> Registrar Editorial </h5> </td>
        <tr>
        	<td> Nombre: </td> 
            <td> <input name="nombre" type="text" maxlength="40" /> </td>
        </tr>
        <tr>
        	<td> RIF </td> 
            <td> <input name="apellido" type="text"  maxlength="40" /> </td>
        </tr>
    	<tr>
        	<td> direccion </td> 
            <td> <textarea name="direccion" rows="4" maxlenght="100"></textarea> </td>
        </tr>
        <tr>
        	<td colspan="2" align="center">
            	<input name="submit" type="submit" value="Registrar" />
                <input name="reset" type="reset" value="Limpiar" />
     </table>
    </form>
    
        </form>
    	<form action="insertar_libro.php" method="post">
        
    <br /> <br />
     <table align="center" cellpadding="2" cellspacing="2" border="1">
    	<tr>
        	<td colspan="2" align="center"> <h4> Registro Libro </h4> </td>
        <tr>
        	<td> Título: </td> 
            <td> <input name="titulo" type="text" maxlength="100" /> </td>
        </tr>
        <tr>
        	<td> Autor1 </td> 
            <td> <input name="autor1" type="text"  maxlength="50" /> </td>
        </tr>
    	<tr>
        	<td> Autor2 </td> 
            <td> <input name="autor2" type="text" maxlength="50" /> </td>
        </tr>
        <tr>
        	<td colspan="2" align="center">
            	<input name="submit" type="submit" value="Registrar"   />
                <input name="reset" type="reset" value="Limpiar" />
     </table>
    </form>
    
</body>
</html>