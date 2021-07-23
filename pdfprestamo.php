<?
 include ('class.ezpdf.php'); 
 $pdf =& new Cezpdf('a4');
 $pdf->selectFont('../fonts/courier.afm');
 $pdf->ezSetCmMargins(1,1,1.5,1.5);
 $conexion = mysql_connect("localhost", "root", "1234");
 mysql_select_db("base", $conexion);
 $result=mysql_query("SELECT cod_prestamo,fecha_prestamo,fecha_devolucion,num_identificacion FROM prestamo",$conexion)or die(mysql_error());
 while($datatmp = mysql_fetch_assoc($result)) {
 $data[] = $datatmp;
 }
 $titles = array(
 'cod_prestamo'=>'CODIGO PRESTAMO',
 'fecha_prestamo'=>'FECHA DE PRESTAMO',
 'fecha_devolucion'=>'FECHA DE DEVOLOCION',
 'num_identificacion'=>'DOCUMENTO IDENTIFICACION'
 );
 $options = array(
 'showHeadings'=>1,
 'shadeCol'=>array(0.9,0.9,0.9),
 'xOrientation'=>'center',
 'width'=>500
 );
 $txttitle = "LISTADO DE MATERIALES PENDIENTES "."\n\n\n";
 $pdf->ezText($txttitle, 12);
 $pdf->ezTable($data,$titles, '', $options);
 $pdf->ezText("\n\n\n", 10);
 $pdf->ezText("Fecha: ".date("d/m/Y")."\n", 10);
 $pdf->ezText("Hora: ".date("H:i:s")."\n\n", 10);
 $pdf->ezStream();
?>