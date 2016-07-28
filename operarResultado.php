<?php
include('seguridad.php');
include('operaciones.php');
include ('conexion.php');
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
    
    
    <p align="right" >Usuario Actual: <?php echo $_SESSION["usuarioActual"]; ?></p>
    
    <p><h1 class="verdana">Operaciones Básicas</h1>
    <table width="475" height="146" border="0" summary="">
      
      <tr>
    <td><form id="form1" name="form1" method="post" action="operarResultado.php">
      <div align="center">
        
        
        <p>&nbsp;</p>
        <table width="412" height="51" border="0" bgcolor="#BDD0DB">
          <tr>
            <td width="154" height="47" align="right"><label for="select3">
              
			  <?php
		$final=new Operacion();
		$final->$_POST["select"]($_POST["dato1"],$_POST["dato2"]);
        //$final->imprimir();
		
        ?>
            </label>
              <div align="right">El resultado de  <?php echo $final->imprimir()." ".$final->getResult()?></div></td>
            
          </tr>
        </table>
      <?php 	  
	  
	  $dato1=$_POST["dato1"];
	  $dato2=$_POST["dato2"];
	  $documento=$_SESSION["usuarioActualDoc"];
	  $total=$final->getResult();
	  $operacion=$_POST["select"];
	  
	  mysqli_query($db, "INSERT INTO resultado(idResultado, dato1, dato2, documento, total, operacion) VALUES (NULL, '$dato1', '$dato2', '$documento', '$total', '$operacion')");	  
	  ?>
        <tr></tr>
        
        <p>&nbsp;</p>
      </div>
    </form></td>
  </tr>
</table>
	<p class="verdana"><a href="operar.php">Registrar otra operación </a></p>
	<p class="verdana"><a href="reportes.php">Consultar mis Movimientos: </a></p>
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
