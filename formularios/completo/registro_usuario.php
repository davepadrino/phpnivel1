<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<form name="form1" action="insertar_registro.php" method="post">

	<table width="398" border="1">
          <tr>  <!-- primera fila -->
            <td  colspan="2" align="center"> <h2> Registro de Usuario </h2>  </td> <!-- celda -->
          </tr>
           <!-- fin de la primera fila -->
          <tr>
            <td width="107">Cédula:</td>
            <td width="275"><input name="cedula" type="text" maxlength="8" /></td>
      	  </tr>
          <tr>
            <td>Nombre:</td>
            <td><input name="nombre" type="text" maxlength="20" /></td>
          </tr>
          <tr>
            <td>Apellido:</td>
            <td><input name="apellido" type="text" maxlength="20" /></td>
          </tr>
          <tr>
        	<td>Estado donde nació: </td>
            <td>
            	<select name="estado">
                	<option value "0"> &nbsp </option>
                    <option value="1"> Aragua </option>
                    <option value="2"> Carabobo </option>
                    <option value="3"> Distrito capital </option>
                    <option value="4"> Miranda </option>
                    <option value="5"> Mérida </option>
                    <option value="6"> Trujillo </option>
                    <option value="7"> Zulia </option>
                </select>
            </td>
          </tr>
          <tr>
            <td>Dirección</td>
            <td> <textarea name="direccion" cols="35" rows="5"> </textarea></td>
          </tr>
          <tr>
            <td>Fecha de Nacimiento:</td>
            <td>
            	Día
                <select name="dia">
            	<?php
					for($i= 1;$i<=31;$i++)
					{
						echo "<option value='$i'>$i </option> "; 
					}
					
				?>
            	 </select>
                Mes
               	<select name="mes">
            	<?php
					for($i= 1;$i<=12;$i++)
					{
						echo "<option value='$i'>$i </option> "; 
					}
					
				?>
              </select>
                Año
                <select name="anio">
            	<?php
					for($i= 1950;$i<=idate("Y");$i++)
					{
						echo "<option value='$i'>$i </option> "; 
					}
					
				?>
                </select>
                
            </td>
          </tr>
          <tr>
            <td>Sexo</td>
            <td>
			  <p>
				  <label>
				    <input type="radio" name="sexo" value="F" id="sexo_0" />
				    Femenino</label>
				  <label>
				    <input type="radio" name="sexo" value="M" id="sexo_1" />
				    Masculino</label>
		      </p>
            </td>
          </tr>
          <tr>
            <td>Pasatiempos</td>
            <td>  
            	<input name="h1" type="checkbox" value="leer" />Leer
                <input name="h2" type="checkbox" value="cine" />Cine
                <input name="h3" type="checkbox" value="musica" />Música
                <br />
                <input name="h4" type="checkbox" value="deportes" />Deportes
                <input name="h5" type="checkbox" value="cocina" />Cocina
                <input name="h6" type="checkbox" value="bailar" />Bailar
            </td>
          </tr>
          <tr>
            <td>Correo Electrónico</td>
            <td><input name="email" type="email" maxlength="120" /></td>
          </tr>
          <tr>
            <td>Nombre de Usuario</td>
            <td><input name="login" type="text" maxlength="20" /></td>
          </tr>
          <tr>
            <td>Contraseña</td>
        	<td><input name="clave" type="password" /></td>
          </tr>
          
          <!--ultima fila -->
          <tr>
            <td colspan="2" align="center">
            	<input name="enviar" type="submit" value="Enviar" />
                <input name="borrar" type="reset" value="Borrar" />
                
            </td>
        </tr>
		</table>
		
    
    
    </form>
</body>
</html>