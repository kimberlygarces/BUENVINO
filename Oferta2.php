
<?php

//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"Buenvino") or die("Error conectandose a la BD ");

		//2.prepara una consulta sql
		$sql = "INSERT INTO OfertaDia values ('".$_POST["CodigOfer"]."','".$_POST["Oferta"]."','".$_POST["Cod"]."')";


		//3.ejecutar la consulta
		mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	

		
		header("Location: descuento.php");

?>