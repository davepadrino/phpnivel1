<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Estados de Vzla</title>
</head>

<body>

	<form method="post" action="capital.php">
		�De qu� estado te gustar�a conocer su capital? <br><br>
		<select name="estado">
			<?php
				$estados = array("Carabobo","nva esparta","bol�var");
				for ($counter =0;$counter<count($estados);$counter++)
					echo "<option value = $counter> $estados[$counter] </option>";
	
			?>
        </select>
        <input type = "submit" name="Enviar" value= "Pulse aqu� para calcular" />
     </form>
     

</body>
</html>