<?php

	if(!empty($_GET["id"])){
		//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"Buenvino") or die("Error conectandose a la BD ");

		//2.prepara una consulta sql
		$sql = "DELETE FROM Productos WHERE id = ".$_GET["id"];

		//3.ejecutar la consulta
		mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	
	}

	header("Location: ListaVino.php");
	exit;
	
?>