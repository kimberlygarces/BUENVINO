<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BuenVino</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- Custom styles for this template -->

<link href="css/one-page-wonder.min.css" rel="stylesheet">

  

</head>


<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">


<div class="container">

  <a class="navbar-brand" href="index.html">BuenVino</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="NuevoVino.php">Nuevo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ListaVino.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="InfoVentas.php">Ventas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="InfoCliente.php">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="administrador.php">Salir</a>
      </li>
    </ul>
  </div>
</div>
</nav>

    <div class="container">
      
        
    <div id="Mostrar"class="row align-items-start">
  
<div class="col-sm-12 col-lg-10">

<h2>Productos Disponibles</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Buscar">
  <br>
  <p>Lista de Vinos disponibles en Bodega</p>

      <table class="table table-striped">

		<thead>
    <th>N</th>
    <th>Id</th>
		<th>Marca</th>
		<th>Tipo</th>
		<th>Clase</th>
    <th>Origen</th>
    <th>Disponibles</th>
    <th>Precio</th>
    <th></th>
    <th></th>



		</thead>

    <tbody id="myTable">
      

		<?php

			//Conectarse al servidor mysql
		$conexion = mysqli_connect("localhost","root","","Buenvino") or die("ERROR: ".mysqli_error($conexion));
		  
		$sql = "SELECT * FROM Productos";

      //EJECUTAR LA CONSULTA
    $resultado = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));

    if(empty($resultado)){

      echo '<tr><td colspan="7"></td></tr>';
    }
    else{
      $i=0;
		while($registro = mysqli_fetch_array($resultado)){
			$i++;
			echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$registro["Id"].'</td>';
				echo '<td>'.$registro["Marca"].'</td>';
				echo '<td>'.$registro["Tipo"].'</td>';
        echo '<td>'.$registro["Clase"].'</td>';
        echo '<td>'.$registro["Origen"].'</td>';
        echo '<td>'.$registro["Cantidad"].'</td>';
        echo '<td>'.$registro["Precio"].'</td>';
        echo '<td>
				<a onclick="javascript: return confirm(\'Desea eliminar el registro actual?\')" href="eliminar.php?id='.$registro["Id"].'"><img src="img/eliminar.png"></a>
                </td>';
                echo '<td>
                <a href="editar.php?id='.$registro["Id"].'"><img src="img/editat.png"></a>
                        </td>';
          echo '</tr>';
          
		}
	}?>

  </tbody>
  </table>


   </div>

   <div class="col-sm-12 col-lg-2">

   <a href="NuevoVino.php"  class="btn btn-primary btn-xl rounded-pill mt-3" role="button" aria-pressed="true">Nuevo<img src="img/mas.png" alt="" class="mr-7 mt-7 rounded-circle">
</a>
   <a href="InfoVentas.php"  class="btn btn-primary btn-xl rounded-pill mt-3" role="button" aria-pressed="true">Ventas<img src="img/ventas.png" alt="" class="mr-7 mt-7 rounded-circle" ></a>
   <a href="InfoCliente.php"  class="btn btn-primary btn-xl rounded-pill mt-3" role="button" aria-pressed="true">Clientes<img src="img/clientes.png" alt="" class="mr-7 mt-7 rounded-circle"></a>
   <a href="descuento.php"  class="btn btn-primary btn-xl rounded-pill mt-3" role="button" aria-pressed="true">Oferta<img src="img/sale.png" alt="" class="mr-7 mt-7 rounded-circle"></a>

    <a href="NuevoVino.php"  class="btn btn-primary btn-xl rounded-pill mt-3" role="button" aria-pressed="true">Agregar</a>
    <a href="NuevoVino.php"  class="btn btn-primary btn-xl rounded-pill mt-3" role="button" aria-pressed="true">Agregar</a>


</div>

</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>