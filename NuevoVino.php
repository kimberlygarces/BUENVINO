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
<img src="../img/5.jpg" alt="" class="mr-7 mt-7 rounded-circle" style="width:60px;">


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


        <div class="container"  id="Mostrar">
        <img src="img/mas.png" alt="" class="mr-7 mt-7 rounded-circle" style="width:60px;">

          <h2>Nuevos productos </h2>
        <hr>
        <div class="row align-items-start">

        <div class="col-sm-12 col-lg-6">

        <form action="NuevoVino2.php" method="post" class="form-group">
            
                
                 <label>Codigo</label>
                <input class="form-control" type="text" name="Codigo">

                <label>Marca</label>
                <input class="form-control" type="text" name="Marca">

                <label for="sel1">Tipo</label>
                <select class="form-control" name="Tipo">
                    <option>Blanco</option>
                    <option>Tinto</option>
                    <option>Rosado</option>
                </select>

                <label for="sel1">Clase</label>
                <select class="form-control" name="Clase">
                    <option>Joven</option>
                    <option>Criaza</option>
                    <option>Reserva</option>
                </select>
                </div>
              <div class="col-sm-12 col-lg-6">
                <label>Precio</label>
                <input class="form-control" type="text" name="Precio">

                <label>Origen</label>
                <input class="form-control" type="text" name="Origen">

                <label>Cantidad</label>
                <input class="form-control" type="number" name="Cantidad">

                
                <input type='hidden' name='Oferta' value="0">

                <br>
                 <input type="submit" class="btn btn-primary" value="Agregar">

                  
                    </div> 
            </form>      
    </div>
            

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>