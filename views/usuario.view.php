<?php
	$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bienvenido usuario!</title>
</head>
<body>
	<h1>Tipo de usuario: <?php echo $usuario ?></h1>
	<h1>Bienvenido usuario!</h1>
	<a href="<?php echo RUTA.'close.php' ?>">Cerrar sesión</a>
</body>
</html>