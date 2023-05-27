<?php
session_start(); //Primero, iniciamos la sesión con session_start() 
?>
<?php
//Luego, incluimos la conexión a la base de datos
include ("conexion.php");
//Después, nos traemos los datos del formulario con el método POST
$usuario = $_POST['username'];
$pass = $_POST['pswd']; 
//Enseguida, usaremos un contador para verificar si los usuarios existen en la tabla
$sentencia = "SELECT COUNT(*) AS buscar_usuario FROM registros WHERE username = '$usuario' AND pswd = '$pass'";
//Usaremos este script para ejecutar la sentencia SQL
$res = mysqli_query($conectar,$sentencia) or die(mysqli_error($conectar));
//Luego, usaremos un arreglo para hacer el inicio de sesión funcional
$arreglo = mysqli_fetch_array($res) or die(mysqli_error($conectar));
//Con el condicional, realizamos el inicio de sesión
if ($arreglo['buscar_usuario']>0) {
	//Manejaremos el arreglo de SESSION para iniciar sesión
	$_SESSION['username']=$usuario;
	//Usando el siguiente script ingresamos a la página principal
	echo "<script language='javascript'> window.location='home.php'; </script>";
} else {
	//Si los datos están incorrectos, mostraremos la siguiente alerta
	echo "<script language='javascript'> alert('Verifica tus credenciales de acceso'); window.location='index.php';</script>";
}
?>