<?php

	include("conexion.php");

	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	$query = "INSERT INTO productos(nombre, descripcion, precio, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$imagen')";
	$resultado =  $conexion->query($query);

	if($resultado){
		header("Location:mostrar.php");
	}
	else{
		echo "Fallo";
	}

?>