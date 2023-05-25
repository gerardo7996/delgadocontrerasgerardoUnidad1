

<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<center>  



<style type="text/css">
  
</style>
<div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
  <div class="container">

</div>
        <div class="container" style="height: 500px; background-color: pink;"
        >
<style>
h1 {color:aquamarine; font-size:100px;}
</style>

        <h1>welcome</h1>  
  
  <h2 align="center">INICIA SESION</h2>
<div class="form-outline">
  <input type="text" id="username" class="form-control" name="username" />
  <label class="form-label" for="form12">Uusuario</label>

<br>
<br>
<br>

<div class="form-outline">
  <input type="password" id="pswd" class="form-control" name="pswd" />
  <label class="form-label" for="form12">Contraseña</label>
</div>
<br>
<br>
<br>

<button type="button" class="btn btn-danger" name="login" id="login">Iniciar Sesión</button></div></div></div></div>
  
  <p>BIENVENIDO NOS ALEGRA TU VISITA!!!!.</p>

  </div>
</center> 
  
  </body>
  </div></div>
  </html>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#login').click(function(){
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
            title: 'Usuario incompleto',
            text: 'Por favor, ingresa tu usuario',
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
            title: 'Contaseña incompletas',
            text: 'Por favor, ingresa tu comtraseña',
            showConfirmButton: true,
            confirmButtonColor: '#0091EA',
            confirmButtonText: 'Aceptar'
          })
          return false;
        }
      })
    })
  </script>
