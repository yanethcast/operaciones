<?php
session_start();
if ($_SESSION["estado"]=="0")
{
	header("Location:index.php");
}
?>