<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="styles.css" rel="stylesheet" type="text/css">
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
	margin-left: 5px;
	margin-right: 5px;
}
.auto-style5 {
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	margin-top: 40px;
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
        <li> <a href="cerrar.php">cerrar secion</a></li>	
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
            
            </div>
            
    
    </div> <!-- end of content left -->

	<!-- end of content right -->

	<div id="layer4" style="position: absolute; width: 664px; height: 313px; z-index: 3; left: 379px; top: 468px">

    <div id="content_right" class="auto-style2">
    
        <div class="margin_bottom_40 border_bottom" style="height: 72px">
			
								<div id="layer5" style="position: absolute; width: 252px; height: 18px; z-index: 1; left: 174px; top: 10px">
								<font size="+6">Devoluciones</font>
								</div>
			
		</div>
        <div class="margin_bottom_40">
			<form action="devoluciones.php" method="post">
									<table align="center" class="auto-style5" bgcolor="#CCCCCC"style="width: 78%; height: 138px;">
										<tr>
											<td style="width: 383px; height: 23px;">
											<span class="auto-style3">&nbsp; <br />
&nbsp; <br />
&nbsp;Digite documento de 
											</span>&nbsp;<span lang="es-co" class="auto-style3">i</span><span class="auto-style3">dentificacion<br />
											</span></td>
											<td style="height: 23px; width: 125px;">
											<br />
											<input type="text" name="doc" class="auto-style4" style="width: 175px" onKeyPress="return validarnum(event)"  placeholder="Solo numeros" required="required"/></td>
										</tr>
										<tr> 
											<td  align="center" colspan="2">
											<br>
<input type="submit" value="Enviar" class="boton" name="enviar" style="width: 147px"/></td>
											
										</tr>
									</table>
									</form>
				<?
				$hoy=date ('Y-m-d');
$doc=$_POST["doc"];
include ("conexion.php");
		$conex=conectar();
		if ($hoy!="")
{
$comando="UPDATE prestamo set fecha_devolucion='$hoy' where num_identificacion='$doc';";
$ejecutar=mysql_query($comando);}
mysql_close($conex);
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