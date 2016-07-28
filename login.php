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
    <td align="center">
    <h2>Formulario de registro</h2>
<fieldset>
         <legend>Registro</legend>
        <form name="form" action="nuevo_usuario.php" method="post">
 <table>
 <tr>
 <td width="146" align="right">
 Nombre:
 </td>
                         <td width="219">
 <input type="text" name="nom" />
 </td>
 </tr>
 <tr>
 <td align="right">
 Apellidos:
 </td>
 <td>
 <input type="text" name="apellidos" />
 </td>
 </tr>
                                <tr>
 <td align="right">
 Edad:
 </td>
 <td>
 <select name="edad">
 <option>18</option>
 <?php for ($i=19; $i< 99; $i++)
 {
 ?>
 <option>
 <?php
 echo $i;
                                                ?>
 <br>
 </option>
 <?php
 }
 ?>
 </select>
 </td>
 </tr>
 <tr>
 <td align="right">
 Tu email:
 </td>
 <td>
 <input type="text" name="correo" />
 </td>
 </tr>
 <tr>
 <td align="right">
 Nick de usuario:
 </td>
 <td>
 <input type="text" name="nick" />
 </td>
 </tr>
 <tr>
 <td align="right">
 Password:
 </td>
 <td>
 <input type="password" name="pass" />
 </td>
 </tr>
 <tr>
 <td colspan="2">
 <div id="valido" style="text-align:center"></div>
 </td>
 </tr>
 <tr>
 <td>
 
 </td>
 <td>
 <input type="button" value="Regístrarme" title="Regístrarme" onclick="validar()" />
 </td>
 </tr>
 </table>
        </form>
</fieldset>
    
    </td>
  </tr>
</table>
    
      <p><a href="opcion.php" style="color:red">Para realizar operaciones registrarse aqu&iacute; </a></p>
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