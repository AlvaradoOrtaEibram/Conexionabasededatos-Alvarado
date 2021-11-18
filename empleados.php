<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['curp']) >= 1
	&& strlen($_POST['telefono']) >= 1) {
	    $name = trim($_POST['nombres']);
	    $apellidos = trim($_POST['apellidos']);
		$email = trim($_POST['correo']);
		$curp = trim($_POST['curp']);
		$tel = trim($_POST['telefono']);
	    $fechareg = date("d/m/y");

	    $consulta = "INSERT INTO empleados(nombres, apellidos, correo, curp, telefono, fecha_reg) 
		VALUES ('$name','$apellidos','$email','$curp','$tel','$fechareg')";
	    
		$resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>