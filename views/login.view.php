<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="img/cabezote.png">
    <link rel="stylesheet" href="css/main.css">
    <title>Ingreso Mantenimiento</title>
</head>

<body>
    <!-- FONDO BURBUJA -->
    <div class="burbuja">
        <div class="burbuja2"></div>
    </div>

    <!-- FORMULARIO -->
    <div class="container">
        <div class="container-center">
            <!-- ABRE CONTAINER FLEX -->
            <div class="container-flex">
                <div class="form">

                    <!-- TITULO FORM -->
                    <div class="form-title">
                        <div class="title-infy">
                            <img src="img/cabezote.png" alt="infy" width="50%" style="margin-right: 50px;">
                            <h3 class="infy" style="color: orange;">Sistema de Mantenimiento</h3>
                        </div>
                        <p>Ingresa para gestionar tus planes de mantenimiento</p>
                    </div>

                    <!-- FORMULARIO FORM/INPUTS -->
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <div class="inputs">
                            <i class="fas fa-user-friends"></i>
                            <input type="text" placeholder="Nombre de Usuario" name="usuario">
                        </div>
                        <div class="inputs">
                            <i class="fas fa-box-open"></i>
                            <input type="password" name="password" placeholder="Contraseña">
                        </div>
                        <input type="submit" value="Ingresar" class="boton">
                    </form>

                    <div style="text-align: center;">
                        <a class="small" href="register.html">Crear una cuenta</a>
                    </div>

                    <div>
                        <p>¿Olvidaste tu Contraseña? <a href="#">Recuperar Ahora</a></p>
                        <p>O</p>
                        <p>Continua con redes sociales</p>
                    </div>
                    <!-- REDES SOCIALES -->
                    <ul>
                        <li>
                            <div class="red">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="red">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="red">
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="red">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- CIERRA CONTAINER FORMULARIO -->

                <!-- TEXTO FORMULARIO -->
                <div class="container-formText">
                    <div class="formText">
                        <h2>SISTEMAQ</h2>
                        <p style="margin-top: -5px; font-weight: bold; font-size: 23px; color: #34495e;">Gestiona el mantenimiento de tu maquinaria.</p>
                    </div>
                </div>
                <!-- CIERRE TEXTO FORMULARIO -->
            </div>
            <!-- CIERRE CONTAINER FLEX -->
        </div>
    </div>
</body>
</html>




<!--
<ul>
				<?php if(!empty($errores)): ?>
				<?php echo $errores ?>
				<?php endif; ?>
			</ul>





			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			
		</form>
-->