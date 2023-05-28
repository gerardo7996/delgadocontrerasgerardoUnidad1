<?php
session_start(); //Iniciamos la sesión en esta sección del sitio
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Metas del sitio -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Título del sitio -->
	<title>Página principal del sitio</title>
	<!-- Favicon del sitio -->
	<link rel="icon" href="img/pagina-principal.png" alt="favicon">
	<!-- Bootstrap 5.3.0 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<!-- Bootstrap 5.3.0 JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<!-- Bootstrap Icons 1.10.5 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<!-- Estilos del sitio -->
	<style type="text/css">
		* {
			margin: 0;
		}

		body {
			margin: 0;
			padding: 0;
			background-color: #84FFFF;
		}

		h4 {
			font-size: 20px;
			color: black;
		}

		h5 {
			font-size: 20px;
			color: black;
		}

		input[type="search"] {
			border-color: #01579B;
			border-radius: 6px;
			font-size: 16px;
		}

		.container {
			border-style: groove;
			border-color: #004D40;
			background-color: #0091EA;
			border-radius: 12px;
		}

		.btn {
			background-color: #1A237E;
			color: whitesmoke;
			font-size: 18px;
			border-radius: 5%;
		}

		.btn:hover {
			background-color: #00E5FF;
			cursor: pointer;
			color: black;
		}

		.icono-home {
			width: 200px;
		}
	</style>
</head>
<body class="sb-nav-fixed">
	<!-- Menú de navegación -->
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<span class="navbar-brand" style="color: black; margin-left: 7px;"><strong>Mi tienda web</strong></span>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="buzon.php">Buzón</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Más opciones
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="ayuda.php">Ayuda</a></li>
                            <li><a class="dropdown-item" href="contacto.php">Contáctanos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="chatbot.php">Chat</a></li>
						</ul>
					</li>
				</ul>
				<form class="d-flex" role="search">
					<input id="buscador" class="form-control me-2" type="search" name="buscador" placeholder="Buscar" aria-label="Search">
					<button class="btn" type="submit" name="btn-buscador" id="btn-buscador" style="margin-right: 5px;"><strong>Buscar</strong></button>
				</form>
				<a class="d-flex btn" href="logout.php"><i class="bi bi-backspace" style="margin-right: 7px;"></i><strong>Regresar</strong></a>
			</div>
		</div>
	</nav>
	<!-- Contenedor del apartado -->
	<div class="container mt-5">
		<br>
		<center><img class="icono-home" src="img/casa.png"></center>
		<h4 class="mt-5" align="center"><strong>Página principal</strong></h4><hr>
		<h4 align="center"><strong>El ID del sitio web es: 1356</strong></h4>
		<h4 align="center"><strong>¡Bienvenido: <?php echo $_SESSION['username']; ?>!</strong></h4>
		<h5 align="center">Aquí podras vivir tu experiencia navegando dentro de internet, en donde puedes comunicarte con nosotros para que podamos aclarar todas tus dudas para que puedas vivir una mejor experiencia al navegar en nuestro sitio web.</h5><br>
		<h5 align="left" id="seccion-buzon"><strong>Buzón de comentarios</strong></h5>
		<h5><a href="buzon.php" style="color: black; margin-left: 22px;">Buzón</a></h5><br>
		<h5 align="left" id="seccion-ayuda"><strong>Sección de ayuda</strong></h5>
		<h5><a href="ayuda.php" style="color: black; margin-left: 22px;">Ayuda</a></h5><br>
		<h5 align="left" id="seccion-contacto"><strong>Sección de contacto</strong></h5>
		<h5><a href="contacto.php" style="color: black; margin-left: 22px;">Contáctanos</a></h5><br>
		<h5 align="left" id="seccion-chat"><strong>Chatbot del sitio</strong></h5>
		<h5><a href="chatbot.php" style="color: black; margin-left: 22px;">Chat</a></h5><br>
		<h5 align="left" id="seccion-catalogo"><strong>Próximamente...</strong></h5>
		<h5><a href="catalogo.php" style="color: black; margin-left: 22px;">Catálogo</a></h5><br>
	</div>
	<br><br>
</body>
</html>