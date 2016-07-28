<?php
//variables de sesion
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
    <td align="center">
    
		<?php
    include ("conexion.php");
    
    $ppass="no existe";
    $ddocumento="no existe";
	$nnombre="no existe";
	$aapellido="no existe";
    
    //consultar si existe el usuario
    $pass=$_POST["pass"];
    $documento=$_POST["documento"];
    $pregunta=$_POST["pregunta"];
    
    if ($pregunta=="2")
    {
        
        $sql = "SELECT * FROM usuario WHERE documento='$documento' AND pass='$pass'";  
        
        if(!$result = $db->query($sql)) 
        
        {   die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']'); 
        
        } 
        
        while($row = $result->fetch_assoc())
        {    
        
        $ddocumento=stripslashes($row["documento"]);
        $ppass=stripslashes($row["pass"]);
		$nnombre=stripslashes($row["nombre"]);
		$aapellido=stripslashes($row["apellido"]); 
        
        }
    
        if (($documento==$ddocumento)&&($pass==$ppass))
        {
            
                echo "Usuario correcto";
                $_SESSION["usuarioActual"]=$nnombre." ".$aapellido;
				$_SESSION["usuarioActualDoc"]=$ddocumento;
                $_SESSION["estado"]="1";
                echo "</br>";
                //header ("Location: operar.php");//se puede o no utilizar???
                echo "<a href=operar.php> Ingresar</a>";
                
            
        }
        
        if (($documento!=$ddocumento)||($pass!=$ppass))
        {
            
            echo "Usuario incorrecto";
			echo "</br>";			
            echo "<a href=formLogin.php> Ingresar datos nuevamente </a>";
        }               
    
    }
	
	if ($pregunta!="2")
        {
            echo "Respuesta incorrecta";
			echo "</br>";			
            echo "<a href=formLogin.php> Ingresar datos nuevamente </a>";
        }
    
    ?>


      
    
    </td>
  </tr>
</table>
    
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


