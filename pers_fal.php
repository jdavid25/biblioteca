<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Biblioteca</title>
</head>

<body>
<?
include ("conexion.php");
$conex=conectar();
		$comando="select * from usuario where fecha_devolucion='0000-00-00';";
		$resultado=mysql_query($comando);
		echo "<center><table width='60%' border='0'";
		echo "<tr>";
		echo "<td>Documento</TD>";
		echo "<td>Nombre</TD>";
		echo "<td>Apellido</TD>";
		echo "<td>Tipo</TD>";
		echo "<td>Grado</TD>";
		echo "<td>Direccion</TD>";
		echo "<td>Telefono</TD>";
		echo "</tr>";
		while ($registros=mysql_fetch_array($resultado))		
		{
		echo "<tr>";
			echo "<td width='17%'value='$registro[0]'>".$registros[1]." "."</td>";
			echo "<td width='14%'value='$registro[1]'>".$registros[2]." "."</td>";
			echo "<td width='14%'value='$registro[2]'>".$registros[3]." "."</td>";
			echo "<td width='14%'value='$registro[3]'>".$registros[4]." "."</td>";
			echo "<td width='14%'value='$registro[4]'>".$registros[5]." "."</td>";
			echo "<td width='14%'value='$registro[5]'>".$registros[6]." "."</td>";
			echo "<td width='14%'value='$registro[6]'>".$registros[7]." "."</td>";
			echo "<BR>";
		echo "</tr>";	
		
		}		
		
?>
</body>
</html>
