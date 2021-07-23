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
<script type="text/javascript">
function validartexto(e) 
{ 
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; 
    patron =/[A-Za-z\s]/; 
    te = String.fromCharCode(tecla); 
    return patron.test(te); 
} 
var nav4 = window.Event ? true : false;
function validarnum(evt)
{   
	var key = nav4 ? evt.which : evt.keyCode;   
	return (key <= 13 || (key>= 48 && key <= 57));
}
</script>
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
	border-radius: 5px;
	-moz-box-shadow: inset 0px 0px 0px 0px #97c4fe;
	-webkit-box-shadow: inset 0px 0px 0px 0px #97c4fe;
	box-shadow: inset 0px 0px 0px 0px #97c4fe;
	background-color: #3d94f6;
	-webkit-border-top-left-radius: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-moz-border-radius-topright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-left-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	text-indent: 0;
	border: 2px solid #337fed;
	display: inline-block;
	color: #ffffff;
	font-family: Comic Sans MS;
	font-size: large;
	font-weight: bold;
	font-style: normal;
	height: 38px;
	line-height: 38px;
	width: 146px;
	text-decoration: none;
	text-align: center;
	text-shadow: 1px 0px 17px #1570cd;
}
.auto-style5 {
	border-collapse: collapse;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	margin-top: 46px;
	border-radius: 15px;
}
.auto-style6 {
	font-size: large;
	margin-left: 3px;
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
	<li><a href='tipomaterial.php'><span>Tipo Material</span></a></li>
	<li><a href='tipousuario.php'><span>Tipo Usuario</span></a></li>

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
							
							
								<table class="auto-style5" bgcolor="#CCCCCC" align="center" style="width: 76%; height: 214px;" >
									<form action="usuario.php" method="post">
									<tr>
										<td>
										<span lang="es-co" class="auto-style3">&nbsp;<br />
&nbsp;D</span><span class="auto-style3">ocumento identificacion</span></td>
										<td><input type="text" name="doc" onKeyPress="return validarnum(event)"  placeholder="Solo numeros" required="required"/></td>
									</tr>
									<tr>
										<td style="height: 24px">
										<span lang="es-co" class="auto-style3">&nbsp;N</span><span class="auto-style3">ombre</span></td>
										<td style="height: 24px"><input type="text" name="nombre" onKeyPress="return validartexto(event)" placeholder="Solo texto" required="required"/></td>
									</tr>
									<tr>
										<td>
										<span lang="es-co" class="auto-style3">&nbsp;A</span><span class="auto-style3">pellido</span></td>
										<td><input type="text" name="apellido" onKeyPress="return validartexto(event)" placeholder="Solo texto" required="required"/></td>
									</tr>
									<tr>
										<td style="height: 18px">
										<span lang="es-co" class="auto-style3">&nbsp;T</span><span class="auto-style3">ipo 
										<span lang="es-co">D</span>e 
										<span lang="es-co">U</span>suario</span></td>
										<td style="height: 18px">
										<select name="tipo">
<?
include ("conexion.php");
		$conex=conectar();
		$comando="select * from tipo_usuario;";
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
										<td>
										<span lang="es-co" class="auto-style3">&nbsp;G</span><span class="auto-style3">rado</span></td>
										<td>
										<input type="text" name="gra" onKeyPress="return validarnum(event)"  placeholder="Solo numeros" required="required"/></td>
									</tr>
									<tr>
										<td>
										<span lang="es-co" class="auto-style3">&nbsp;D</span><span class="auto-style3">ireccion</span></td>
										<td>
										<input type="text" name="dir" /></td>
									</tr>
									<tr>
										<td>
										<span lang="es-co" class="auto-style3">&nbsp;T</span><span class="auto-style3">elefono</span><div id="layer5" style="position: absolute; width: 100px; height: 31px; z-index: 1; left: 366px; top: 553px">
										</div>
														</td>
										<td>
										<input type="text" name="tel" onKeyPress="return validarnum(event)"  placeholder="Solo numeros" required="required">/></td>
									</tr>
									<tr>
										<td colspan="2" align="center">
										<br />
										<br />
<input type="submit" class="auto-style4" value="Enviar" name="ins" style="height: 41px; width: 102px"/><br />
										<br />
										</td>
										<td class="auto-style3">
										&nbsp;</td>
									</tr>
									</form>
								</table>
							<?

$doc=$_POST["doc"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$usuario=$_POST["tipo"];
$grado=$_POST["gra"];
$direc=$_POST["dir"];
$tel=$_POST["tel"];
$comando="INSERT INTO usuario (num_identificacion,nombre,apellido,tipo_usuario,grado,direccion,telefono_celular) 
value('$doc','$nombre','$apellido','$usuario','$grado','$direc','$tel');";
$ejecutar=mysql_query($comando);
	mysql_close($conexion);
?>
							
		</div>
    
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