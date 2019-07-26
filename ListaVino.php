<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BuenVino</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

      <a class="navbar-brand" href="index.html">BuenVino</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="administrador.php">Oferta del dia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="administrador.php">Imformes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="administrador.php">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container">
      
        
      <div id="Mostrar" class="row align-items-center">
 
      <div class="col-sm-12 col-lg-8">

      <table class="table table-striped">

		<thead>
    <th>N</th>
    <th>Id</th>
		<th>Marca</th>
		<th>Tipo</th>
		<th>Clase</th>
    <th>Origen</th>
    <th>Precio</th>
    <th></th>
    <th></th>



		</thead>

		<tbody>
      

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
        echo '<td>'.$registro["Precio"].'</td>';

    

				echo '<td>
				<a onclick="javascript: return confirm(\'Desea eliminar el registro actual?\')" href="eliminar.php?id='.$registro["Id"].'">Eliminar</a>
				<a href="editar.php?id='.$registro["Id"].'">Editar</a>

                </td>';
        echo '<td>
               
        <a href="Oferta.php?id='.$registro["Id"].'" class="btn btn-primary" >Oferta</a>

        </td>';
                
     

          echo '</tr>';
          
		}
	}?>

  </tbody>
  </table>


   </div>
  <img src='img/2.jpg' alt='' class='mr-3 mt-3 rounded-circle' style='width:160px;'>
   <a href="NuevoVino.php"  class="btn btn-primary btn-xl rounded-pill mt-5" role="button" aria-pressed="true">Agregar</a>

</div>


<div class="col-sm-12 col-lg-8">

     <br>

     <table class="table table-striped">

<thead>
<th>Id</th>
<th>Descuento</th>
<th></th>


</thead>
<tbody>

          <?php

      //Conectarse al servidor mysql
      $conexion = mysqli_connect("localhost","root","","Buenvino") or die("ERROR: ".mysqli_error($conexion));

      $sql = "SELECT * FROM OfertaDia";

      //EJECUTAR LA CONSULTA
      $resultado = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));

      

      if(empty($resultado)){

      echo '<tr><td colspan="3"></td></tr>';
      }
      else{
      while($registro = mysqli_fetch_array($resultado)){
      $i++;
      echo '<tr>';
        echo '<td>'.$registro["Id"].'</td>';
        echo '<td>'.$registro["Oferta"].'</td>';
       
        echo '<td>
        <a href="eliminarDescuento.php?id='.$registro["Id"].'">Quitar</a>

                </td>';
        echo '<td>
              
        </td>';
                


          echo '</tr>';
          
      }
      }?>

 
    </div>

 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>