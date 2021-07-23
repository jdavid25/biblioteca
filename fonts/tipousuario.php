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
	margin-top: 45px;
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
            <li><a href="anadir">Añadir</a></li>
        </ul>    	
    </div> 
</div> 

<div id="content_wrapper">
<div id="content">

    <div id="content_left" style="height: 444px; width: 170px">
		<!-- end of news section -->
        
        <div class="content_left_section" style="height: 341px; width: 215px">
            &nbsp;
            
            <div id='cssmenu'>
<ul>
    <li class='active'><a href='usuario.php'><span>Usuario</span></a></li>
	<li><a href='tipousuario.php'><span>Tipo Usuario</span></a></li>
	<li><a href='tipomaterial.php'><span>Tipo Material</span></a></li>

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
							<form action="tipousuario.php" method="post">
			<table align="center" style="width: 76%; height: 312px;" border="0"  bgcolor="#CCCCCC" class="auto-style4" >
		<tr>
			<td class="auto-style3">&nbsp; Numero Documento Identificacion</td>
			<td><br />
			<input type="text" name="cod" onKeyPress="return validarnum(event)"  placeholder="Solo numeros" required="required"/></td>
		</tr>
		<tr>
			<td class="auto-style3"><br />
			&nbsp;Nombre</td>
			<td><input type="text" name="nom" onKeyPress="return validartexto(event)" placeholder="Solo texto" required="required"/></td>
		</tr>
		<tr>
			<td class="auto-style3"><br />
			&nbsp;Apellido</td>
			<td><input type="text" name="ape" onKeyPress="return validartexto(event)" placeholder="Solo texto" required="required"/></td>
		</tr>
		<tr>
			<td class="auto-style3"><br />
			&nbsp;Tipo De Usuario</td>
			<td><select name="tipo">
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
			<td class="auto-style3" style="height: 18px"><br />
			&nbsp;Grado</td>
			<td style="height: 18px"><input type="text" name="grado" onKeyPress="return validarnum(event)"  placeholder="Solo numeros" required="required"/></td>
		</tr>
		<tr>
			<td style="height: 25px" class="auto-style3"><br />
			&nbsp;Direccion</td>
			<td style="height: 25px"><input type="text" name="dir" ></td>
		</tr>
		<tr>
			<td class="auto-style3"><br />
			&nbsp;Telefono</td>
			<td><input type="text" name="tel" onKeyPress="return validarnum(event)"  placeholder="Solo numeros" required="required"></td>
		</tr>
		<tr>
			<td align="center" colspan="2">
			<br />
<input type="submit" value="Modificar" name="elim" class="boton" style="height: 35px"/><br />
			</td>
			<td>&nbsp;</td>
		</tr></form>
	</table>
			<?
include ("conexion.php");
$conex=conectar();
$codusu=$_POST["codusu"];
$usu=$_POST["usu"];
$comando="INSERT INTO tipo_usuario (codigo,detalle_usuario) 
value('$codusu','$usu');";
$ejecutar=mysql_query($comando);
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