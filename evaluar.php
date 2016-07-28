<?php
//variables de sesion
session_start();
$_SESSION["estado"]="0";
$password=$_POST["password"];
$pregunta=$_POST["pregunta"];

if ($password=="1234")
{
	if ($pregunta=="2")//If anidado
	{
		$_SESSION["estado"]="1";
		//$_SESSION["usuario"]="$password";
		header ("Location: operar.php");
		}
	
}

if (($password!="1234")||($pregunta!="2"))//If anidado))
{
	$_SESSION["estado"]="0";
	header ("Location: index.php");	
}




?>

