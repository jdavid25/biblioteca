<?
session_start();
session_destroy();
 echo "<script language='JavaScript' type='text/javascript'>
			var pagina='http://localhost/software/index.html'
			function redireccionar() 
			{
				location.href=pagina
			} 
			setTimeout ('redireccionar()', 0)
			</script>";
?>

