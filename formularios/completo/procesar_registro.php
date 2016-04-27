<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<table width="60%" border="0" align="center" cellpadding="0" cellspace="5" >
          <tr>  <!-- primera fila -->
            <td  colspan="2" align="center"> <h2> Registro de Usuario </h2>  </td> <!-- celda -->
          </tr>
           <!-- fin de la primera fila -->
          <tr>
            <td width="32%">Cédula: </td>
            <td width="68%"><?php echo trim(strtoupper($_POST["cedula"])); ?> </td>
      	  </tr>
          <tr>
            <td>Nombre:</td>
            <td><?php echo trim(strtoupper($_POST["nombre"])); ?></td>
          </tr>
          <tr>
            <td>Apellido:</td>
            <td><?php echo trim(strtoupper($_POST["apellido"])); ?></td>
          </tr>
          <tr>
        	<td>Estado donde nació: </td>
            <td>
            	<?php
					switch($_POST["estado"]){
						case 0: echo "no selecciono estado.";break;
						case 1: echo "Aragua.";break;
						case 2: echo "Carabobo";break;
						case 3: echo "Distrito Capital";break;
						case 4: echo "Miranda";break;
						case 5: echo "Mérida";break;
						case 6: echo "Trujillo";break;
						case 7: echo "Zulia";break;
				
					}
				?>
            </td>
            
          </tr>
          <tr>
            <td>Dirección</td>
            <td> <?php echo trim(strtoupper($_POST["direccion"])); ?></td>
          </tr>
          <tr>
            <td>Fecha de Nacimiento:</td>
            <td>
            	<?php
					$fecha = mktime(0,0,0,$_POST["mes"],$_POST["dia"], $_POST["anio"]);
					setLocale(LC_TIME,"esp");
					echo strftime("Naciste el día %A,%d de %B de %Y, $fecha");
				?>
            </td>
          </tr>
          <tr>
            <td>Sexo</td>
            <td>
				<?php
					if(isset($_POST["sexo"])){
						if($_POST["sexo"]=="F")
							echo "Femenino";
						else
							echo "Masculino";
					}
				?>
            </td>
          </tr>
          <tr>
            <td>Pasatiempos</td>
            <td>  
				<?php
					if(isset($_POST["h1"])) echo strtoupper($_POST["h1"])."<br>";
					if(isset($_POST["h2"])) echo strtoupper($_POST["h2"])."<br>";
					if(isset($_POST["h3"])) echo strtoupper($_POST["h3"])."<br>";
					if(isset($_POST["h4"])) echo strtoupper($_POST["h4"])."<br>";
					if(isset($_POST["h5"])) echo strtoupper($_POST["h5"])."<br>";
					if(isset($_POST["h6"])) echo strtoupper($_POST["h6"])."<br>";
				?>
            </td>
          </tr>
          <tr>
            <td>Correo Electrónico</td>
            <td><?php echo trim(strtoupper($_POST["correo"])); ?></td>
          </tr>
          <tr>
            <td>Nombre de Usuario</td>
            <td><?php echo trim(strtoupper($_POST["login"])); ?></td>
          </tr>
          <tr>
            <td>Contraseña</td>
        	<td><?php echo trim(strtoupper($_POST["password"])); ?></td>
          </tr>
          
          <!--ultima fila -->

		</table>
		
    
   
</body>
</html>