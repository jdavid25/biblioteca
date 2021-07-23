<?
function conectar()
{
	$conexion=mysql_connect("localhost","root","1234") or die ("no servidor");
	mysql_select_db("base",$conexion) or die ("no base de datos");
	return $conexion;
}
?>