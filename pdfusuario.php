<?
 include ('class.ezpdf.php'); 
 $pdf =& new Cezpdf('a4');
 $pdf->selectFont('../fonts/courier.afm');
 $pdf->ezSetCmMargins(1,1,1.5,1.5);
 $conexion = mysql_connect("localhost", "root", "1234");
 mysql_select_db("base", $conexion);
 $result=mysql_query("SELECT num_identificacion,nombre,apellido,tipo_usuario,grado,direccion,telefono_celular FROM usuario",$conexion)or die(mysql_error());
 while($datatmp = mysql_fetch_assoc($result)) {
 $data[] = $datatmp;
 }
 $titles = array(
 'num_identificacion'=>'Documento',
 'nombre'=>'Nombre',
 'apellido'=>'Apellido',
 'tipo_usuario'=>'TIPO DE USUARIO',
 'grado'=>'Grado',
 'direccion'=>'Direccion',
 'telefono_celular'=>'Telefono'
 
 );
 $options = array(
 'showHeadings'=>1,
 'shadeCol'=>array(0.9,0.9,0.9),
 'xOrientation'=>'center',
 'width'=>500
 );
 $txttitle = "LISTADO DE PERSONAS PENDIENTES "."\n\n\n";
 $pdf->ezText($txttitle, 12);
 $pdf->ezTable($data,$titles, '', $options);
 $pdf->ezText("\n\n\n", 10);
 $pdf->ezText("Fecha: ".date("d/m/Y")."\n", 10);
 $pdf->ezText("Hora: ".date("H:i:s")."\n\n", 10);
 $pdf->ezStream();
?>