<?php
    if (isset($_POST['reset-pswd'])) {
    	include("conexion.php");
    	$email = $conectar->real_escape_string($_POST['email']);
    	$query = $conectar->query("SELECT email FROM users WHERE email = '$email'");
    	$count = $query->num_rows;

    	if ($count == 1) {
    		$token = uniqid();
    		$act = $conectar->query("UPDATE users SET token = '$token' WHERE email = '$email'");
    	}
    	else {
    		echo "<script language='javascript'>
    		    Swal.fire({
    		    	icon: 'error',
    		    	showCancelButton: false,
    		    	showConfirmButton: true,
    		    	confirmButtonColor: '',
    		    	confirmButtonText: 'Aceptar',
    		    	allowOutsideClick: false,
    		    	title: 'Correo no encontrado',
    		    	text: 'El correo ingresado no existe'
    			}).then(()=>{
    				if(result.value){
    					window.location.href = 'recuperar.php';
    				}
    			})
    		</script>";
    	}
    }
?>