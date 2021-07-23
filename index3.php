<?php
session_start();
?>	
<?php
								// creo dos variables para almacenar el login y el password
								$l=$_POST['usuario'];
								$p=$_POST['contrasena'];
								echo $l;
								echo $p;
								//hasta aqui
$conexion=mysql_connect("localhost","root","1234") or die("Problemas en la conexion");
mysql_select_db("base",$conexion) or die("Problemas en la selección de la base de datos");
$registro=mysql_query("select * from registro where usuario='$l' and clave='$p';",$conexion) or die("Error:".mysql_error());
if ($reg=mysql_fetch_array($registro))
{
  //$_SESSION['nombre']=$reg['nombre'];
  //aqui registro las variables de inicio de sesion
  $loging=$reg[1];
  echo $loging;
  $password=$reg[2];
  echo $password;
		session_register('loging');
		session_register('password');
		session_register('l');
		session_register('p');
		include("sesion.php");
		
		//hasta aqui
  echo "<a href=index.html>PUEDE INGRESAR AL SITIO</a>";
   echo "<script language='JavaScript' type='text/javascript'>
			var pagina='http://localhost/software/index2.php'
				location.href=pagina
			</script>";
}
else
{
  echo "<H4>No esta autorizado a ingresar al sitio <strong> (Clave o nombre de Usuario incorrecto)</strong></h4>";
}
?>