
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="styles.css" rel="stylesheet" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Biblioteca</title>
<meta name="keywords" content="Professional Template, HTML, CSS, free website template" />
<meta name="description" content="Professional Template, HTML, CSS, free website template provided by freecsstemplates.in" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.auto-style1 {
	margin-bottom: 0px;
}
</style>
</head>
<body>
<div id="header_wrapper">
    <div id="header">
        <div id="site_title_section">
            <div id="site_title">
	            Biblioteca<div id="layer2" style="position: absolute; width: 100px; height: 98px; z-index: 2; left: 642px; top: 20px">
					<div id="layer3" style="position: absolute; width: 94px; height: 98px; z-index: 1; left: 110px; top: 6px">
						<img alt="" height="86" src="escudo_colombia.jpg" width="92" class="auto-style1" /></div>
					<img alt="" height="95" src="Escudo%20del%20sena.png" width="96" /></div>
            </div>
            <div id="salogon">
	            Software<div id="layer1" style="position: absolute; width: 100px; height: 90px; z-index: 1; left: 532px; top: 25px">
					<img alt="" height="86" src="actividades.jpg" width="94" /></div>
			</div>
            <div class="cleaner">&nbsp;</div>
        </div>
        
    </div> <!-- end of header -->
</div>  <!-- end of header wrapper -->

<div id="banner_wrapper">
    <div id="banner">
    
        <div id="banner_header_01">Institucion Educativa <br />
			
			<br />
			<br />
			San Juan Bosco </div>
        <div id="banner_header_02"><br />
			Servicio Nacional De Aprendizaje (Sena) <br />
		</div>
    </div>
</div> 

<div id="menu_wrapper">    
    <div id="menu">
        <ul>
            <li><a href="index.html" class="current">Iniciar secion</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>    	
    </div> 
</div> 

<div id="content_wrapper">
<div id="content"><!-- end of content left -->

	<!-- end of content right -->
	
<form action="registro.php" method="post">
<table border="0" width="30%" align="center">
<tr>
	<td><font size="2">digote nuevo administrador</font></td>
	<td><input type="text" name="usuario"></td>
</tr>
<tr>
	<td><font size="2">digite contraseña</font></td>
	<td><input type="password" name="contraseña"></td>
</tr>
<tr>
	<td><font size="2">digite contraseña de nuevo</font></td>
	<td><input type="password" name="contraseña2"></td>
</tr>
<tr>
	<td colspan="2"><center><input type="submit" value="ingresar" /></center></td>
</tr>
</table>
</form><br />
<?
include ("conexion.php");
$conex=conectar();
$con1=$_POST["contraseña"];
$con2=$_POST["contraseña2"];
$usu=$_POST["usuario"];
if ($con1!="" && $con2!="" && $usu!="")
{
if ($con1==$con2)
{
$comando="INSERT INTO registro (id,usuario,clave) values('','$usu','$con1');";
$ingreso=mysql_query($comando);
echo "el registro se realizo con exito";
}
else {
echo "las claves no coinciden";}
}
mysql_close($conex);
?>	
</div> <!-- end of content -->
</div> <!-- end of content wrapper -->
<!-- end of footer wrapper -->
</body>
</html>