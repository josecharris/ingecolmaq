<?php
session_start();
require 'admin/config.php';
require 'functions.php';

//comprobar session
if (!isset($_SESSION['usuario'])) {
	header('Location: '.RUTA.'login.php');
}

//Validad los datos por privilegios

$tipo = $_SESSION['type_user'];

if ($tipo == "ADMINISTRADOR") {
	header("Location: ".RUTA."admin.php");
}elseif ($tipo == "PRIMARIO") {
	header("Location: ".RUTA."usuario.php");
}elseif ($tipo == "VISITANTE") {
	header("Location: ".RUTA."usuario.php");
}else{
	header("Location: ".RUTA."login.php");
}


?>