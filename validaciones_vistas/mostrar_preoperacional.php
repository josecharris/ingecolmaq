<?php session_start();

require '../admin/config.php';
require '../functions.php';

$_SESSION['idMaquina'] = $_GET['idMaquina'];

//COMPROBAR SESION
if (!isset($_SESSION['usuario'])) {
  header('Location: '.RUTA.'login.php');
}

$tipo = $_SESSION['type_user'];

if ($tipo == 'ADMINISTRADOR') {
  require '../views/preoperacional/show.view.php';
}else{
  header('Location: '.RUTA.'index.php');
}

?>