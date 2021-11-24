<?php
	include("../src/conexion.php");

	if (isset($_POST['Ctrl']) && !empty($_POST['Ctrl']) &&
		isset($_POST['Nombre']) && !empty($_POST['Nombre']) &&
	    isset($_POST['ApellidoPaterno']) && !empty($_POST['ApellidoPaterno']) &&
		isset($_POST['ApellidoMaterno']) && !empty($_POST['ApellidoMaterno'])){
			mysqli_query($con, ("INSERT INTO usuarios(Ctrl, Nombre, ApellidoPaterno, ApellidoMaterno) VALUES ('$_POST[Ctrl]', '$_POST[Nombre]', '$_POST[ApellidoPaterno]', '$_POST[ApellidoMaterno]')"));
			echo "<h1>Datos insertados exitosamente</h1>";
	} else {
		echo "<h2>Error al insertar datos</h2>";
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Resultado del Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/send.css">
</head>
<body>
<body>
<nav>
	<ul> 	
		<li>
			<a href="../index.html"> Inicio</a>
		</li>
		<li>
			<a href="../registro.html">Registro</a>
		</li>
		<li>
			<a href="consulta.php"> Consultas</a>
		</li>
	</ul>
	</nav>
</body>
</html>