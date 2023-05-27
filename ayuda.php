<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Metas del sitio -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sección de ayuda</title>
	<!-- Título del sitio -->
	<title>Iniciar Sesión</title>
    <!-- Favicon del sitio -->
    <link rel="icon" href="img/usuario.png" alt="favicon">
    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap 5.3.0 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons 1.10.5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Estilos del sitio -->
    <style type="text/css">
    	<style type="text/css">
		* {
			margin: 0;
		}

		body {
			margin: 0;
			padding: 0;
			background-color: #84FFFF;
		}

		.navbar {
			background-color: #0091EA;
		}

		.navbar h5 {
			font-size: 26px;
			color: whitesmoke;
			margin-left: 25px;
		}

		h4 {
			font-size: 20px;
			color: black;
		}

		h5 {
			font-size: 20px;
			color: black;
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

		.help-icon {
			width: 200px;
		}
    </style>
</head>
<body class="sb-nav-fixed">
	<nav class="navbar">
		<h5 class="navbar-brand"><strong>Mi tienda web</strong></h5>
		<a class="d-flex btn" href="home.php" style="margin-right: 25px;"><i class="bi bi-backspace" style="margin-right: 7px;"></i><strong>Regresar</strong></a>
	</nav>
	<!-- Contenedor del apartado -->
	<div class="container mt-5">
		<br>
		<center><img class="help-icon" src="img/ayuda.png"></center>
		<h4 class="mt-5" align="center"><strong>Ayuda sobre como utilizar el sitio</strong></h4><hr>
		<h5 align="center">En esta sección, se te enseñará a como puedes realizar tus compras y mejorar tu experiencia de usuario en nuestro sitio web. Aquí te mostramos como puedes utilizar nuestro sitio web.</h5><br>
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<div class="col">
				<div class="card h-100">
					<img src="img/carrito-de-compras.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">¿Cómo utilizar el carrito de compras?</h5>
						<p class="card-text">El carrito se utiliza para qu puedas guardar todos los productos que tu desees comprar en la tienda en línea del sitio.</p>
					</div>
				</div>
			</div>
			<div class="col">
			 	<div class="card h-100">
			 		<img src="img/catalogo.png" class="card-img-top" alt="...">
			 		<div class="card-body">
			 			<h5 class="card-title">¿Cómo utilizar el catálogo?</h5>
			 			<p class="card-text">El catálogo te mostrara todos los productos que tengas disponibles para comprar.</p>
			 		</div>
			 	</div>
			</div>
			<div class="col">
			 	<div class="card h-100">
			 		<img src="img/tarjeta-de-credito.png" class="card-img-top" alt="...">
			 		<div class="card-body">
			 			<h5 class="card-title">¿Cómo pagar con tarjeta de crédito en el sitio?</h5>
			 			<p class="card-text">Cuando compres un producto de nuestra tienda, selecciona el método de pago y selecciona "Tarjeta de crédito" e ingresa tu número de tarjeta (Ojo: nunca des tu npumero de tarjeta en páginas no oficiales).</p>
			 		</div>
			 	</div>
			</div>
		</div>
	</div>
	<br><br>
</body>
</html>