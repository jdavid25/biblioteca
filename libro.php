<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Biblioteca</title>
</head>

<body>
<form action="libros.php" method="post">
escoga dia del cual desea informacion <input type="text" value="2013-09-24" readonly name="theDate"><input type="button" value="Cal" onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this)">
</form>
</body>
</html>
