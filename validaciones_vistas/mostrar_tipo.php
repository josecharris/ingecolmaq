<?php session_start();

require '../admin/config.php';
require '../functions.php';
require '../Logic/connect.php';

//COMPROBAR SESION
if (!isset($_SESSION['usuario'])) {
  header('Location: '.RUTA.'login.php');
}

$tipo = $_SESSION['type_user'];

if ($tipo == 'ADMINISTRADOR') {
	    $_SESSION['tipo_consumo'] = $_POST['slc_tipo_consumo'];
	    $_SESSION['operador_name'] = $_POST['slc_operador'];

	    switch ($_SESSION['tipo_consumo'] ) {
	    	case 'combustible':
	    		require '../views/consumo/combustible.view.php'; 
	    		break;
	    	
	    	case 'lubricante':
	    		require '../views/consumo/lubricante.view.php'; 
	    		break;

	    	case 'montallantas':
	    		require '../views/consumo/montallantas.view.php'; 
	    		break;

	    	case 'otros':
	    		require '../views/consumo/otros.view.php'; 
	    		break;
	    }
}else{
  header('Location: '.RUTA.'index.php');
}