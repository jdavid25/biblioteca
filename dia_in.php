<html>
<head>
<title>conexion</title>
</head>
<body>
<form action="dia.php" method="post" >
digite fecha de inicio<input type="text" name="fecha"><br>
<input type="submit" name="boton" value="enviar">
</form>
	<?php
	$fecha=$_POST["fecha"];
	
	if ($fecha!="")
	{
		include ("conexion.php");
		$conex=conectar();
		$comando="SELECT usuario.num_identificacion, usuario.nombre, usuario.apellido,usuario.tipo_usuario,usuario.grado, usuario.direccion,   usuario.telefono_celular
FROM prestamo,usuario where usuario.num_identificacion = prestamo.num_identificacion
and fecha_prestamo=$fecha';";
		$resultado=mysql_query($comando);
		echo "<center><table width='60%' border='0'";
		echo "<tr>";
		echo "<td>DOCUMENTO</TD>";
		echo "<td>NOMBRE</TD>";
		echo "<td>APELLIDO</TD>";
		echo "<td>TIPO</TD>";
		echo "<td>GRADO</TD>";
		echo "<td>DIRECCION</TD>";
		echo "<td>TELEFONO</TD>";
		echo "</TR>";
		while ($registros=mysql_fetch_array($resultado))		
		{
			echo "<tr>";
			echo "<td width='25%'>".$registros[0]." "."</td>";
			echo "<td width='25%'>".$registros[1]." "."</td>";
			echo "<td width='25%'>".$registros[2]." "."</td>";
			echo "<td width='25%'>".$registros[3]." "."</td>";
			echo "<td width='25%'>".$registros[4]." "."</td>";
			echo "<td width='25%'>".$registros[5]." "."</td>";
			echo "<td width='25%'>".$registros[6]." "."</td>";
			echo "<BR>";
		echo "</tr>";	
		}
echo "</table></center>";		
		mysql_close($conex);}
	?>
</body>
</html>