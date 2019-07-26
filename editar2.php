<?php

//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"Buenvino") or die("Error conectandose a la BD ");

		//2.prepara una consulta sql
		echo $sql = "UPDATE Productos SET Marca = '".$_POST["Marca"]."',
							Tipo = '".$_POST["Tipo"]."',Clase = '".$_POST["Clase"]."',
							Origen = '".$_POST["Origen"]."',Precio = '".$_POST["Precio"]."' 
							WHERE id=".$_POST["Codigo"];

		//3.ejecutar la consulta
		mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	

		header("Location: ListaVino.php");

?>