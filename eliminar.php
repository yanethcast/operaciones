<?php
include ("conexion.php");
include ("seguridad.php");
$idResultado=$_POST["idResultado"];
$documento=$_SESSION["usuarioActual"];

mysqli_query($db, "DELETE FROM Resultado WHERE idResultado='$idResultado' "); 

header("Location:reportes.php");
?>