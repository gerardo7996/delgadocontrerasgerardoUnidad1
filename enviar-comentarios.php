<?php
//Incluimos la conexión a la base de datos
include ("conexion.php");
//Después, nos traemos los datos del formulario con el método POST
$nombre = $_POST['name'];
$comentario = $_POST['comentario'];
//Manejaremos la siguiente sentencia SQL para insertar los datos a la tabla
$sentencia = "INSERT INTO comentarios (name, comentario) VALUES ('$nombre', '$comentario')";
//Ejecutamos la sentencia SQL con el siguiente script
$res = mysqli_query($conectar,$sentencia) or die(mysqli_error($conectar));
//Ahora, verificamos si se enviaron los comentarios
if ($res) {
	//Mostranos la siguiente alerta cuando se envió el comentario
	echo "<script language='javascript'> alert('Tu comentario fue publicado con éxito'); window.location='buzon.php';</script>";
} else {
	//Si sucede un error, mostramos la siguiente alerta
	echo "<script language='javascript'> alert('Surgió un error y tu comentario no se pudo publicar'); window.location='buzon.php';</script>";
}
//Usaremos el siguiente script para cerrar la conexión de la base de datos
mysqli_close($conectar);
?>