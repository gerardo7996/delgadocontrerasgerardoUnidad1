<?php
//Primero, incluimos la conexión a la base de datos
include ('conexion.php');
//Luego, nos traemos los datos del formulario
$correo = $_POST['email'];
//Usamos la siguiente sentencia para buscar los correos en la tabla
$query = mysqli_query($conectar,"SELECT * FROM registros WHERE email = '$correo'") or die(mysqli_error($conectar));
//Usamos el siguiente parametro para contar wl número de correos registrados en la tabla
$num_rows = mysqli_num_rows($query) or die(mysqli_error($conectar));
//Luego, verificamos que se realice el envio de correos
if ($num_rows==1) {
	//Creamos un arreglo para mostrar los datos de la tabla
	$muestra = mysqli_fetch_array($query) or die(mysqli_error($conectar));	
	//Manejaremos la siguiente sentencia para buscar todos los registros de la tabla
	$query1 = mysqli_query($conectar, "SELECT * FROM registros") or die(mysqli_error($conectar));
	//Después, creamos un bucle para mostrar el ID de cada registro de la tabla
	while ($row = mysqli_fetch_assoc($query1)):
	//Luego, se crea un enlace que estará dentro del correo que se vaya a enviar
	$enlace = "http://".$_SERVER['HTTP_HOST'] .
	"/delgadocontrerasgerardoUnidad1/nueva_pass.php?user_id=".$row['id_user'];
	//Enseguida, definimos el correo que se mandará cuando ingresamos el correo en el formulario
	$paracorreo = $correo;
	//Aquí se muestra el título del correo que se va a enviar
	$titulo = "Recuperación de contraseña olvidada";
	$mensaje = "Hola: " . $row['username'] . " Has solicitado un correo de recuperación de tu contraseña olvidada. Por favor ingresa al siguiente enlace para restablecer tu contraseña: $enlace";
	$tucorreo = "From: 20045084@alumno.utc.edu.mx";
    endwhile;
	//Aquí utilizamos un condicional con el parametro mail para comprobar los envios de correos
	if (mail($paracorreo, $titulo, $mensaje, $tucorreo)) {
		//Se nos mostrará la siguiente alerta cuando se realizó el envio del correo correctamente
		echo "<script language='javascript'> alert('El correo de recuperación de contraseña ha sido enviado correctamente'); window.location='recuperar.php'; </script>";
	} else {
		//Se nos mostrará la siguiente alerta cuando ocurrió un error al enviar
		echo "<script language='javascript'> alert('Surgió un error y el correo no se pudo enviar'); window.location='recuperar.php'; </script>";
	}
} else {
	//Se muestra la siguiente alerta cuando se ingresó un correo que no existe en la tabla
	echo "<script language='javascript'> alert('El correo ingresado no existe'); window.location='recuperar.php'; </script>";
}
//Usamos este script para cerrar la conexión
mysqli_close($conectar);
?>