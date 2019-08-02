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
	<?php
		if(!empty($_GET["id"])){
		//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"Buenvino") or die("Error conectandose a la BD ");

		//2.prepara una consulta sql
		$sql = "SELECT * FROM Productos WHERE id = ".$_GET["id"];

		//3.ejecutar la consulta
		$resultado = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	
		if($resultado){
			$registro = mysqli_fetch_array($resultado);
		}

	}
    ?>

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
            <a class="nav-link" href="administrador.php">Ingresar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


        <div class="container">
        <div id="Mostrar"class="row align-items-start">


        <div class="col-sm-12 col-lg-6">
            	<form action="OfertaDia.php" method="post">

              <label>Codigo</label>
                <input class="form-control" type="text" name="CodigOfer"  value="<?php echo $registro["Id"];  ?>">

                <label>Precio</label>
                <input class="form-control" type="text" name="P_Oferta" value="<?php echo $registro["Precio"]/2;  ?>">

                <!--guardar oferta-->

                <input class="form-control" type="hidden" name="Codigo"  value="<?php echo $registro["Id"];  ?>">
                <input class="form-control" type="hidden" name="Marca" value="<?php echo $registro["Marca"];  ?>">
                <input class="form-control" type="hidden" name="Tipo" value="<?php echo $registro["Tipo"];  ?>">
                <input class="form-control" type="hidden" name="Clase" value="<?php echo $registro["Clase"];  ?>">
                <input class="form-control" type="hidden" name="Precio" value="<?php echo $registro["Precio"];  ?>">
                <input class="form-control" type="hidden" name="Cantidad" value="<?php echo $registro["Cantidad"];  ?>">
                <input class="form-control" type="hidden" name="Origen" value="<?php echo $registro["Origen"];  ?>">
                <br>


             <?php 
             
             if($registro["Oferta"]=="1"){
                
              echo "<input class='form-control' type='hidden' name='Oferta' value='0']>";

              }else{
                echo "<input class='form-control' type='hidden' name='Oferta' value='1']>";
              };?>

                      <?php
            if(($registro["Oferta"])=="1"){
              echo "<input type='submit' class='btn btn-primary' value='Quitar Oferta'>";

              echo "<img src='img/sale2.png' alt='' class='mr-3 mt-3 rounded-circle'>";
              }else{
              echo "<input type='submit' class='btn btn-primary' value='Aplicar Oferta'>";

              };?>

  
                </div>
                </div>
  </form>
    </div>

</body>
</html>