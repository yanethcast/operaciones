<?php
include('seguridad.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>
<table width="600" border="1" align="center">
  <tr>
    <td colspan="3">
	<?php
	include ('banner.php');
	?>	</td>
  </tr>
  <tr>
    <td colspan="3"><?php
	include ('menu.php');
	?></td>
  </tr>
  <tr>
    <td width="100" height="183"><?php
	include ('publicidad.php');
	?></td>
    <td width="484" colspan="2"><p>
      <h1 class="verdana">Claves WIFI</h1>
      <p class="verdana">Dav1=2344</p>
      <p class="verdana">Dav2=34534</p>
      <p class="verdana">Dav3=35453      </p>
      <p class="verdana">&nbsp;</p>
      <p class="verdana"><a href="salir.php">Cerrar sesion: </a></p>
      <p class="verdana">&nbsp;</p>
      <p class="verdana"><a href="index.php"></a></p>
      <p><a href="formLogin.php" style="color:red"></a></p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="38" colspan="3"><?php
	include ('footer.php');
	?></td>
  </tr>
</table>
</body>
</html>
