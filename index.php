<?php
session_start();
$_SESSION["estado"]="0";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operaciones</title>
<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body bgcolor="#E2E2E2">
<table width="600" border="0" align="center">
  <tr>
    <td colspan="3" bgcolor="#999999" height="120">
	<?php
	include ('banner.php');
	?>	</td>
  </tr>
  <tr>
    <td colspan="3">
	<?php
	include ('menu.php');
	?></td>
  </tr>
  <tr>
    <td width="84" height="183" bgcolor="#F0D9DA">
	
	<?php
	include ('publicidad.php');
	?></td>
    
    <td width="500" colspan="2" align="center" bgcolor="#E6F2F1">
    
    <p><h1 class="verdana">Operaciones Básicas</h1></p>
    <table width="475" height="146" border="0" summary="">
  
  <tr>
    <td><form id="form1" name="form1" method="post" action="operaciones.php">
      <div align="center">
        <p>&nbsp;</p>
        <table width="307" height="180" border="0" bgcolor="#BDD0DB">
          <tr>
            <td width="142"><div align="right">Digite dato1:</div></td>
            <td width="168"><label for="textfield"></label>
              <input name="dato1" type="text" disabled="disabled" id="textfield" /></td>
          </tr>
          <tr>
            <td><div align="right">Digite dato2:</div></td>
            <td><input name="dato2" type="text" disabled="disabled" id="textfield2" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><label for="select"></label>
              <select name="select" id="select">
                <option value="">Seleccionar Operación</option>
                <option value="sumar">Suma</option>
                <option value="restar">Resta</option>
                <option value="multiplicar">Multiplicación</option>
                <option value="dividir">División</option>
              </select></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <input type="button" name="enviar" id="button" value="Enviar" />
            </div></td>
            </tr>
        </table>
        <p>&nbsp;</p>
      </div>
    </form></td>
  </tr>
</table>
    
      <p><a href="formLogin.php" style="color:red">Para realizar operaciones ingrese aqu&iacute; </a></p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="38" colspan="3" bgcolor="#666666"><?php
	include ('footer.php');
	?></td>
  </tr>
</table>
</body>
</html>
