<?php

//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"Buenvino") or die("Error conectandose a la BD ");

		//2.prepara una consulta sql
		$sql = "INSERT INTO Productos values ('".$_POST["Codigo"]."','".$_POST["Marca"]."','".$_POST["Tipo"]."','".$_POST["Clase"]."','".$_POST["Origen"]."','".$_POST["Precio"]."','".$_POST["Cantidad"]."','".$_POST["Oferta"]."')";

		//3.ejecutar la consulta
		mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	

		header("Location: ListaVino.php");

?>