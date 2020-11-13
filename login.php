<?php 
session_start();

require 'admin/config.php';
require 'functions.php';

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = $_POST['usuario'];
	$pass = $_POST['password'];

	$conexion = conexion($bd_config);
	$statement = $conexion->prepare('SELECT * FROM usuario u, roles r WHERE u.username=:usuario AND u.password=:password AND u.idRole=r.id_role');
	$statement->execute([
		':usuario' => $usuario,
		':password' => $pass
	]);

	$resultado = $statement->fetch();

	if ($resultado != false) {
		$_SESSION['usuario'] = $usuario;
		$_SESSION['type_user'] = $resultado['description'];
		header('Location: '.RUTA.'index.php');
		
	}else{
		$errores = '<li class="error">Tu usuario o contraseña son incorrectos</li>';
	}
}

require 'views/login.view.php';

?>