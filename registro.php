<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Formulario de registro</title>
	<link rel="stylesheet" href="estilos.css">

</head>
<body>
	<h1>Registro</h1>
	<p>Ingrese los datos completos: </p> <br/>

	<form action="accion.php" method="post">
	<p>nombre: <input type="text" name="nombre" /></p>
	<p>Apellido paterno: <input type="text" name="paterno" /></p>
	<p>Apellido materno: <input type="text" name="materno" /></p>
	<p>Teléfono: <input type="text" name="telefono" /></p>
	<p>Correo electrónico: <input type="text" name="email" /></p>
	<p><input type="submit" /></p>
	</form>
</body>
</html>
