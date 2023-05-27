<?php
//Primero, incluimos la conexión a la base de datos
include ("conexion.php");
//Después, nos traemos los datos del formulario con el método POST
$usuario = $_POST['username'];
$correo = $_POST['email'];
$pass = $_POST['pswd'];
//Enseguida definimos la IP del servidor del reCaptcha de Google
$ip = $_SERVER['REMOTE_ADDR'];
//Luego definimos con el método POST y el parametro response para hacer la validación del captcha
$captcha = $_POST['g-recaptcha-response'];
//Definimos la clave secreta en donde se debe interactuar el captcha
$secretkey = "6Lf0lC4mAAAAAIoeE61sm0KvlOHCl28qSa3vw1_5";
//Manejaremos el file_get_contents para enviar la petición para validar el captcha en donde manejaremos los parametros de secret, response y remoteip y la API de solicitud del reCaptcha de Google 
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
//Después, convertimos la respuesta en formato JSON para verificar el captcha
$atributos = json_decode($response, TRUE);
//Luego, verificamos la validación de la variable $atributos para ver si da igual a true o false
if (!$atributos['success']) {
	//Si la variable $atributos indica false, mostramos la siguiente alerta
	echo "<script language='javascript'> alert('Verifica el captcha'); window.location='registro.php';</script>";
//En caso que la variable $atributos indica true, se procede con el registro del usuario	
} else {
	//Manejaremos la siguiente sentencia SQL para insertar los datos a la tabla
    $query = "INSERT INTO registros (username, email, pswd) VALUES ('$usuario', '$correo', '$pass')";
    //Ejecutamos la sentencia SQL con el siguiente script
    $res = mysqli_query($conectar,$query) or die(mysqli_error($conectar));
    //Verificamos si se registraron los usuarios
    if ($res) {
	    //Mostranos la siguiente alerta cuando se realizó el registro correctamente
	    echo "<script language='javascript'> alert('El usuario fue registrado con éxito'); window.location='index.php';</script>";
    } else {
	    //Si sucede un error, mostramos la siguiente alerta
	    echo "<script language='javascript'> alert('Surgió un error y el usuario no pudo ser registrado'); window.location='registro.php';</script>";
    }
}
//Usaremos el siguiente script para cerrar la conexión de la base de datos
mysqli_close($conectar);
?>