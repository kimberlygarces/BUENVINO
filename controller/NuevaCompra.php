<?php

//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"Buenvino") or die("Error conectandose a la BD ");

		//2.prepara una consulta sql
		$sql = "INSERT INTO Compra values ('','".$_POST["Cliente"]."','".$_POST["Direccion"]."','".$_POST["Credito"]."','".$_POST["txtC"]."','".$_POST["txtTotal"]."')";

		//3.ejecutar la consulta
		mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	

        $compra_id = mysqli_insert_id($conexion);
        foreach ($_SESSION["carrito"] as $i => $registo) {
            $sql = "INSERT INTO detalle VALUES ('', '".$compra_id."',$registro->Marca)";
            mysqli_query($conexion, $sql);
        }
		header("Location: ../index.html");

?>