<?php

//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"Buenvino") or die("Error conectandose a la BD ");

		//2.prepara una consulta sql
		$sql = "INSERT INTO Compra values ('','".$_POST["Cliente"]."','".$_POST["Direccion"]."','".$_POST["Credito"]."','".$_POST["txtC"]."','".$_POST["txtTotal"]."')";

		
		//3.ejecutar la consulta
		mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	

		$Venta_id = mysqli_insert_id($conexion);
		//$FechaVenta 


		require_once "../Model/Data.php";

		session_start();

		if(isset($_SESSION["carrito"])){
			$carrito = $_SESSION["carrito"];
            
			foreach($carrito as $p){


			$sql2 = "INSERT INTO detalle VALUES ('', '".$Venta_id."','".$p->Id."','".$p->Cantidad."','".$p->SubTotal."')";
			mysqli_query($conexion, $sql2);
			
		}}
		

		
		header("Location: ../index.html");

?>