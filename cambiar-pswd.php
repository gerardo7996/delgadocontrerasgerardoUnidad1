<?php
//Usaremos un condicional que tenga un isset para el envio del formulario
if (isset($_POST['change-pswd'])) {
	//Después, agregamos la conexión a la base de datos
	include ("conexion.php");
	//Luego, nos traemos los datos del formulario con el método POST
	$password = $_POST['pswd'];
	//Verificamos que las cajas no estén vacías
	if (!empty($password)) {
		//Manejaremos la siguiente sentencia SQL para actualizar las contraseñas
		$sql = "UPDATE registros SET pswd = '$password'";
		//Enseguida, ejecutamos la consulta con el siguiente script
		$resultado = mysqli_query($conectar,$sql);
		//Comprobamos si se actualizaron las contraseñas
		if ($resultado) {
			//Mostramos la siguiente notificación cuando ya se actualizó la contraseña con éxito
			echo "<script language='javascript'> alert('La contraseña se restableció correctamente'); window.location='index.php'; </script>";
		} else {
			//Mostramos la siguiente notificación cuando ocurrió un error
			echo "<script language='javascript'> alert('Surgió un error y la contraseña no se pudo restablecer'); window.location='recuperar.php'; </script>";
		}	
	}
}
//Usaremos el siguiente script para cerrar la conexión de la base de datos
mysqli_close($conectar);
?>