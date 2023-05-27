<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Librería de jQuery-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Librería de SweetAlert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="sb-nav-fixed">
<form action="" method="POST">
  <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="username">Usuario</label>
            <input id="username" class="form-control" type="text" name="username" placeholder="Ingresa un usuario">
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input id="email" class="form-control" type="email" name="email" placeholder="Ingresa un correo">
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="pswd">Contraseña</label>
            <input id="pswd" class="form-control" type="password" name="pswd" placeholder="Ingresa una contraseña">
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="pswd2">Confirmar Contraseña</label>
            <input id="pswd2" class="form-control" type="password" name="pswd2" placeholder="Confirma tu contraseña">
        </div>
    </div>
  </div>
  <br>
  <center>
    <button class="btn" type="submit" name="registrar" id="registrar"><i class="bi bi-save-fill">  </i><strong>Registrar</strong></button>  <button class="btn" type="reset" name="clean" id="clean"><i class="bi bi-trash">  </i><strong>Limpiar Formulario</strong></button>
  </center>
</form>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#registrar').click(function(){
            if ($('#username').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Campo de usuario vacio',
                    text: 'Por favor, ingresa un nombre de usuario',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            } else if ($('#email').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Campo de correo vacio',
                    text: 'Por favor, ingresa un correo electronico',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            } else if ($('#pswd').val() == "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'warning',
                    title: 'Contraseña incompleta',
                    text: 'Por favor, ingresa una contraseña',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            } else if ($('#pswd2').val() !== $('#pswd').val() || "") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: false,
                })
                Swal.fire({
                    icon: 'error',
                    title: 'Contraseña incorrecta',
                    text: 'Las contraseñas no coinciden, vuelve a confirmar tu contraseña',
                    showConfirmButton: true,
                    confirmButtonColor: '#0091EA',
                    confirmButtonText: 'Aceptar'
                })
                return false;
            }
        });
    });
</script>