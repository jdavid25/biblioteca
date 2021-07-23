<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="styles.css" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Biblioteca</title>
<meta name="keywords" content="Professional Template, HTML, CSS, free website template" />
<meta name="description" content="Professional Template, HTML, CSS, free website template provided by freecsstemplates.in" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.auto-style1 {
	margin-bottom: 0px;
}
.auto-style2 {
	margin-left: 109px;
	margin-top: 62px;
}

table, table td { 
	padding:0;
	border:none;
	border-collapse:collapse;
}
* { border:none}
.boton {
	-moz-box-shadow:inset 0px 0px 0px 0px #97c4fe;
	-webkit-box-shadow:inset 0px 0px 0px 0px #97c4fe;
	box-shadow:inset 0px 0px 0px 0px #97c4fe;
	background-color:#3d94f6;
	-webkit-border-top-left-radius:5px;
	-moz-border-radius-topleft:5px;
	border-top-left-radius:5px;
	-webkit-border-top-right-radius:5px;
	-moz-border-radius-topright:5px;
	border-top-right-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	-moz-border-radius-bottomright:5px;
	border-bottom-right-radius:5px;
	-webkit-border-bottom-left-radius:5px;
	-moz-border-radius-bottomleft:5px;
	border-bottom-left-radius:5px;
	text-indent:0;
	border:2px solid #337fed;
	display:inline-block;
	color:#ffffff;
	font-family:Comic Sans MS;
	font-size:23px;
	font-weight:bold;
	font-style:normal;
	height:38px;
	line-height:38px;
	width:146px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 0px 17px #1570cd;
}
.auto-style3 {
	font-size: large;
}
.auto-style4 {
	border-collapse: collapse;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	margin-top: 34px;
	border-radius: 15px;
}
.auto-style5 {
	border-collapse: collapse;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	margin-top: 53px;
	border-radius: 15px;
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
            <li><a href="index.html" class="current">Inicio</a></li>
            <li><a href="prestamos.php">
			Prestamos</a></li>
            <li><a href="devoluciones.php">Devoluciones</a></li>
            <li><a href="pendientes.php">Pendientes</a></li>
            <li></li>
            <li><a href="modificar.php">Modificar</a></li>
            <li><a href="anadir.php">Añadir</a></li>
            <li><a href="cerrar.php">cerrar secion</a></li>

        </ul>    	
    </div> 
</div> 
<?include('sesion.php');?>
<div id="content_wrapper">
<div id="content">

    <div id="content_left" style="height: 444px; width: 170px">
		<!-- end of news section -->
        
        <div class="content_left_section" style="height: 341px; width: 215px">
            &nbsp;
            
            <div id='cssmenu'>
<ul>
    <li class='active'><a href='mod_usuario.php'><span>Usuario</span></a></li>
	<li><a href='mod_material.php'><span>Material</span></a></li>
	<li><a href='mod_tipousu.php'><span>Tipo Usuario</span></a></li>
	<li><a href='mod_tipoma.php'><span>Tipo Material</span></a></li>

	</ul>
</div>
            </div>
            
    
    </div> <!-- end of content left -->

	<!-- end of content right -->

	<div id="layer4" style="position: absolute; width: 664px; height: 313px; z-index: 3; left: 379px; top: 468px">

    <div id="content_right" class="auto-style2">
    
        <div class="margin_bottom_40 border_bottom">
			
		</div>
        <div class="margin_bottom_40">
						<form action="mod_material.php" method="post">	
			<table  align="center"  bgcolor="#CCCCCC"class="auto-style5" style="width: 60%" border="0">
						<tr>
							<td><span lang="es-co" class="auto-style3">&nbsp;
							<br />
&nbsp; Numero Id Material</span></td>
							<td><input type="text" name="cod" onKeyPress="return validarnum(event)"  placeholder="Solo numeros" /></td>
						</tr>
						<tr>
							<td style="height: 18px">
							<span lang="es-co" class="auto-style3">&nbsp; <br />
&nbsp; Tipo De Material</span></td>
							<td style="height: 18px"><select name="tipo">
<?
	include ("conexion.php");
$conex=conectar();
		$comando="select * from tipo_material;";
		$resultado=mysql_query($comando);
		while ($registros=mysql_fetch_array($resultado))		
		{
			echo "<option value=$registros[0]>$registros[1] </option>";
			$a=$registros[0];
		}
?>
</select></td>
						</tr>
						<tr>
							<td style="height: 18px">
							<span lang="es-co" class="auto-style3">&nbsp; <br />
&nbsp;&nbsp; Area</span></td>
							<td style="height: 18px"><input type="text" name="area" onKeyPress="return validartexto(event)" placeholder="Solo texto" /></td>
						</tr>
						<tr>
							<td style="height: 18px"><span lang="es-co" class="auto-style3">&nbsp; 
							<br />
&nbsp; Titulo</span></td>
							<td style="height: 18px"><input type="text" name="titulo" onKeyPress="return validartexto(event)" placeholder="Solo texto" /></td>
						</tr>
						<tr class="auto-style4">
							<td align="center" colspan="2"><br>
<input type="submit" value="Modificar"   class="boton" elim" style="width: 135px; height: 35px"/><br />
							</td>
							<td>&nbsp;</td>
						</tr></form>
					</table>
							
		</div>
    <?

$codigo=$_POST["cod"];
$tipo=$_POST["tipo"];
$area=$_POST["area"];
$titulo=$_POST["titulo"];
if ($tipo!="")
{
$comando="UPDATE material set tipo_material='$tipo' where id_material='$codigo';";
$ejecutar=mysql_query($comando);}
if ($area!="")
{
$comando1="UPDATE material set area='$area' where id_material='$codigo';";
$ejecutar=mysql_query($comando1);}
if ($titulo!="")
{
$comando2="UPDATE material set titulo_materia='$titulo' where id_material='$codigo';";
$ejecutar=mysql_query($comando2);}
mysql_close($conex);
?>
    </div> </div>

<div class="cleaner">&nbsp;</div>

</div> <!-- end of content -->
</div> <!-- end of content wrapper -->

<div id="footer_wrapper">        
    <div id="footer">
        Copyright © biblioteca software     </div><!-- end of footer -->
</div><!-- end of footer wrapper -->
</body>
</html>