<?php
include('seguridad.php');
include ('conexion.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reportes</title>
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
       
    <p align="right">Usuario Actual: <?php echo $_SESSION["usuarioActual"]; ?></p>
    
    <p><h1 class="verdana">Mis Reportes</h1></p>
    
    <table width="590"  border="0" summary="">
  
  <tr>
    <td>
    <?php
	$iidResultado="No existe";
	$ddato1="No existe";
	$ddato2="No existe";
	$ddocumento="No existe";
	$ttotal="No existe";
	$ooperacion="No existe";
	
	
	
	//Generando reportes
	
	$documento=$_SESSION["usuarioActualDoc"];
	$sql = "SELECT * FROM resultado WHERE documento='$documento'";
	
	if (!$result = $db->query($sql))
	{
		die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']'); 
		
	}
	echo "<table width=500 border=0 bgcolor=#BDD0DB >";
	echo "<tr>";
	echo "<td width=50>id</td>";
	echo "<td width=100>dato1</td>";
	echo "<td width=100>dato2</td>";
	echo "<td width=100>documento</td>";
	echo "<td width=200>total</td>";
	echo "<td width=100>operacion</td>";
	echo "<td width=100>eliminar</td>";
	echo "</tr>";
	while ($row = $result->fetch_assoc())
	
	{
		$iidResultado=stripslashes($row["idResultado"]);
		$ddato1=stripslashes($row["dato1"]);
		$ddato2=stripslashes($row["dato1"]);
		$ddocumento=stripslashes($row["documento"]);
		$ttotal=stripslashes($row["total"]);
		$ooperacion=stripslashes($row["operacion"]);
		$algo=" ";
		
		
		echo "<tr>";
		echo "<td width=50>$iidResultado</td>";
		echo "<td width=100>$ddato1</td>";
		echo "<td width=100>$ddato2</td>";
		echo "<td width=100>$ddocumento</td>";
		echo "<td width=200>$ttotal</td>";
		echo "<td width=100>$ooperacion</td>";
		echo "<td width=100><form id=form1 name=form1 action=eliminar.php method=post>
		<label>
		<input name=idResultado type=hidden id=idResultado value=$iidResultado />
		</label>
		
		<label>
		<input name=Submit type=submit value=Eliminar />
		</label>
		
		</form></td>";
		echo "</tr>";
		
	}
	echo "</table>";
	?>
    
    </td>
  </tr>
</table>
	<p class="verdana"><a href="operar.php">Registrar otra operación </a></p>
    <p class="verdana"><a href="salir.php">Cerrar sesion: </a></p>
      <p class="verdana">&nbsp;</p>
      <p class="verdana"><a href="index.php"></a></p>
      <p><a href="formLogin.php" style="color:red"></a></p>
    <p>&nbsp;</p>
      </td>
  </tr>
  <tr>
    <td height="38" colspan="3" bgcolor="#666666"><?php
	include ('footer.php');
	?></td>
  </tr>
</table>
</body>
</html>
