<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Metas del sitio -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buzón de comentarios</title>
	<!-- Favicon del sitio -->
	<link rel="icon" href="img/comentarios.png" alt="favicon">
	<!-- Bootstrap 5.3.0 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<!-- Bootstrap 5.3.0 JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<!-- Bootstrap Icons 1.10.5 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<!-- Librería de jQuery-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Librería de SweetAlert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

		.form-group input[type="text"],
		.form-group textarea {
			border-color: #01579B;
			border-radius: 6px;
			font-size: 16px;
			margin-bottom: 6px;
		}

		.container {
			border-style: groove;
			border-color: #004D40;
			background-color: #0091EA;
			border-radius: 12px;
		}

		.icono-comentarios {
			width: 200px;
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

		h5 {
			font-size: 20px;
			color: black;
		}
	</style>
</head>
<body class="sb-nav-fixed">
	<nav class="navbar">
		<h5 class="navbar-brand"><strong>Mi tienda web</strong></h5>
		<a class="d-flex btn" href="home.php" style="margin-right: 25px;"><i class="bi bi-backspace" style="margin-right: 7px;"></i><strong>Regresar</strong></a>
	</nav>
	<!-- Formulario para enviar comentarios -->
	<div class="container mt-5">
		<br>
		<center><img class="icono-comentarios" src="img/comentario.png"></center>
		<h4 class="mt-5" align="center"><strong>Buzón de comentarios</strong></h4><hr>
		<form action="enviar-comentarios.php" method="POST">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="name"><strong>Nombre</strong></label>
						<input id="name" class="form-control" type="text" name="name" placeholder="Ingresa tu nombre">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<label for="comentario"><strong>Comentario</strong></label>
						<textarea id="comentario" class="form-control" rows="4" name="comentario" placeholder="Escribe aquí tu comentario"></textarea>
					</div>
				</div>
			</div>
			<br>
			<!-- Botón para enviar los comentarios -->
			<center>
				<button class="btn" type="submit" name="send-comment" id="send-comment"><i class="bi bi-send">  </i><strong>Enviar comentario</strong></button>  <button class="btn" type="reset" name="clean" id="clean"><i class="bi bi-trash">  </i><strong>Limpiar formulario</strong></button><br>
			</center>
			<br>
		</form>
	</div>
	<br><br>
</body>
</html>
<!-- Código de JS para validar los campos del formulario -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#send-comment').click(function(){
			if ($('#name').val() == "") {
				const Toast = Swal.mixin({
				    toast: true,
				    position: 'top-end',
				    showConfirmButton: false,
				    timer: 1000,
				    timerProgressBar: false,
		 	    })
		 	    Swal.fire({
				    icon: 'warning',
				    title: 'Campo de nombre vacío',
			        text: 'Por favor, escribe tu nombre',
				    showConfirmButton: true,
				    confirmButtonColor: '#0091EA',
				    confirmButtonText: 'Aceptar'
			    })
			    return false;
			} else if ($('#comentario').val() == "") {
				const Toast = Swal.mixin({
				    toast: true,
				    position: 'top-end',
				    showConfirmButton: false,
				    timer: 1000,
				    timerProgressBar: false,
		 	    })
		 	    Swal.fire({
				    icon: 'warning',
				    title: 'Campo de comentario vacío',
			        text: 'Por favor, escribe tu comentario',
				    showConfirmButton: true,
				    confirmButtonColor: '#0091EA',
				    confirmButtonText: 'Aceptar'
			    })
			    return false;
			}
		});
	});
</script>
