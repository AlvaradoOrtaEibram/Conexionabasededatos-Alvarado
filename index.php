<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Alta de empleados!</h1>
    	<input type="text" name="nombres" placeholder="Nombre completo">
    	<input type="text" name="apellidos" placeholder="Apellidos">
		<input type="email" name="correo" placeholder="Correo">
		<input type="text" name="curp" placeholder="Curp">
		<input type="text" name="telefono" placeholder="Telefono">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("empleados.php");
        ?>
</body>
</html>