<?php
if (!$l || !$p) 
{
	echo "No existe una sesión activa";
	session_destroy();
	echo "<script>alert('No hay una sesion activa'); </script>";
	 echo "<script language='JavaScript' type='text/javascript'>
			var pagina='http://localhost/software/index.html'
			location.href=pagina
			</script>";
}
else  
	{
		if($loging=="$l" and $password=="$p")
		{
			echo "$loging";
		}
		else 
		{
			echo "<script>alert('Loging o Password Invalido'); </script>";
			session_destroy();
		}
	}
?>