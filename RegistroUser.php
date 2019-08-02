
<?php

require 'dataBase.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);

  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

  $stmt->bindParam(':password', $password);


     
  if ($stmt->execute()) {
    $message = 'Usuario Creado';
  } else {
    $message = 'Error al crear usuario';
  }
}
?>


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
            <a class="nav-link" href="index.html">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>





    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="container">
    <div id="Mostrar" class="row align-items-center">



    <form class="form-signin" action="RegistroUser.php" method="POST">
      <input name="email" class="form-control" type="text" placeholder="Usuario">
      <br>
      <input name="password" class="form-control" type="password" placeholder="Contraseña">

      <br>
      <input type="submit" class="btn btn-lg btn-primary btn-block" value="Registrar Usuario">
<br>

  <button type="button" class="form-control" class="btn btn-light btn-block" onclick="location='administrador.php'">Iniciar sesion</button>

    </form>
</div>

</div>


<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>

      
       


