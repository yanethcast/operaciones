<?php 

$db = new mysqli('localhost', 'root', '', 'operaciones'); 

$acentos = $db->query("SET NAMES 'utf8'"); 

if($db->connect_error > 0){     die('Mensaje de Error [' . $db->connect_error . ']');   } 

?> 