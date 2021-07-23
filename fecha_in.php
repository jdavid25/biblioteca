<html>
<head>
<title>conexion</title>
</head>
<body>
<form action="fecha_in.php" method="post" >
digite fecha de inicio<input type="text" name="fecha"><br>
digite fecha de finalizacion<input type="text" name="fech"><br>
<input type="submit" name="boton" value="enviar">
</form>
	<?php
	$fecha=$_POST["fecha"];
	$fech=$_POST["fech"];
	if ($fecha!="" and $fech!="")
	{
		include ("conexion.php");
		$conex=conectar();
		$comando="SELECT usuario.num_identificacion, usuario.nombre, usuario.apellido,usuario.tipo_usuario,usuario.grado, usuario.direccion,   usuario.telefono_celular, prestamo.fecha_prestamo
FROM prestamo,usuario where usuario.num_identificacion = prestamo.num_identificacion
and fecha_prestamo BETWEEN '$fecha' and '$fech';";
		$resultado=mysql_query($comando,$conex);
		echo "<center><table width='60%' border='0'";
		echo "<tr>";
		echo "<td>DOCUMENTO</TD>";
		echo "<td>NOMBRE</TD>";
		echo "<td>APELLIDO</TD>";
		echo "<td>TIPO</TD>";
		echo "<td>GRADO</TD>";
		echo "<td>DIRECCION</TD>";
		echo "<td>TELEFONO</TD>";
		echo "<td>FECHA</TD>";
		echo "</TR>";
		while ($registros=mysql_fetch_array($resultado))		
		{
		//echo $registros[1];
			echo "<tr>";
			echo "<td width='25%'>".$registros[0]." "."</td>";
			echo "<td width='25%'>".$registros[1]." "."</td>";
			echo "<td width='25%'>".$registros[2]." "."</td>";
			echo "<td width='25%'>".$registros[3]." "."</td>";
			echo "<td width='25%'>".$registros[4]." "."</td>";
			echo "<td width='25%'>".$registros[5]." "."</td>";
			echo "<td width='25%'>".$registros[6]." "."</td>";
			echo "<td width='25%'>".$registros[7]." "."</td>";
			echo "<BR>";
		echo "</tr>";	
		}
echo "</table></center>";		
		mysql_close($conex);}
	?>
</body>
</html>