<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BuenVino</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

      <a class="navbar-brand" href="../index.html">BuenVino</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Oferta del dia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Imformes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



    <div class="container">

      <div id="Mostrar"class="row align-items-start">

      <div class="col-sm-12 col-lg-4">
      <img src="../img/5.jpg" alt="" class="mr-7 mt-7 rounded-circle" style="width:160px;">

      <hr>
      <?php

      require_once "../Model/Data.php";

      $d = new Data();

      $productos = $d->getProductos();

              session_start();
              if(isset($_SESSION["carrito"])){
                $carrito = $_SESSION["carrito"];
             

                      echo "<table class='table table-dark'>";
                          "<tr>";
                          echo "<td>",'ID',"</td>";
                          //echo "<td>",'TIPO',"</td>";
                         // echo "<td>",'MARCA',"</td>";
                          //echo "<td>",'CLASE',"</td>";
                          echo "<td>",'PRECIO',"</td>";
                          echo "<td>",'CANTIDAD',"</td>";
                          echo "<td>",'SUBTOTAL',"</td>";
                          "<tr>";

                          $total = 0;

                          foreach($carrito as $p){

                            echo "<tr>";
                              echo "<td>".$p->Id."</td>";
                              //echo "<td>".$p->Tipo."</td>";
                             // echo "<td>".$p->Marca."</td>";
                              //echo "<td>".$p->Clase."</td>";
                              echo "<td>".$p->Precio."</td>";
                              echo "<td>".$p->Cantidad."</td>";
                              echo "<td>".$p->SubTotal."</td>";

                              $total += $p->SubTotal;
                              echo "</tr>";
                              }

                              echo "<tr>";
                                  echo "<td colspan='3'>",'TOTAL',"</td>";
                                  echo "<td>".$total."</td>";

                                  echo "</tr>";
                      
                      echo "</table>";


                          

              }
              
              ?>
            <a href="Comprar.php" class="btn btn-primary btn-xl rounded-pill mt-5">Comprar</a>

            </div>

      
      
            <div class="col-sm-12 col-lg-8">
  <!-- 
            <h3>Productos Disponibles</h3>

              <table class="table table-striped">

              <thead>
              <th>N</th>
              <th>Id</th>
              <th>Marca</th>
              <th>Tipo</th>
              <th>Clase</th>
              <th>Precio</th>
              <th>Agregar</th>
              </thead>

              <tbody>
              -->

              
            <?php

            /*
  
            require_once "../Model/Data.php";

            $d = new Data();

            $productos = $d->getProductos();

            foreach($productos as $p){

            echo "<tr>";
              echo "<td>","<img src='../img/2.jpg' alt='' class='mr-3 mt-3 rounded-circle' style='width:30px;'>","</td>";
              echo "<td>".$p->Id."</td>";
              echo "<td>".$p->Tipo."</td>";
              echo "<td>".$p->Marca."</td>";
              echo "<td>".$p->Clase."</td>";
              echo "<td>".$p->Precio."</td>";
              echo "<td>";


            echo "<form action='../controller/carrito.php' method='post'>";
            echo "<input type='hidden' name='txtId' value='$p->Id'>";
            echo "<input type='hidden' name='txtMarca' value='$p->Marca'>";
            echo "<input type='hidden' name='txtTipo' value='$p->Tipo'>";
            echo "<input type='hidden' name='txtClase' value='$p->Clase'>";
            echo "<input type='hidden' name='txtPrecio' value='$p->Precio'>";

            echo "<input type='number' name='txtCantidad'>";
            echo "<input type='submit' name='btnAnadir' value='Añadir'>";
            echo "</td>";

            echo "</tr>";
            echo "</form>";
            }

            </tbody>
            </table>
            </div>
            
            </div>
              */
            ?>


            

            <h3>Productos Disponibles</h3>

              <table class="table table-striped">

            <thead>
            <th>N</th>
            <th>Id</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th>Clase</th>
            <th>Precio</th>
            <th>Agregar</th>
            </thead>
            
            <tbody>
              

            <?php
            require_once "../Model/Data.php";

            $d = new Data();

            $productos = $d->getProductos();

            foreach($productos as $p){

              echo "<tr>";
                echo "<td>","<img src='../img/2.jpg' alt='' class='mr-3 mt-3 rounded-circle' style='width:30px;'>","</td>";
                echo "<td>".$p->Id."</td>";
                echo "<td>".$p->Tipo."</td>";
                echo "<td>".$p->Marca."</td>";
                echo "<td>".$p->Clase."</td>";
                echo "<td>".$p->Precio."</td>";
                echo "<td>";


            echo "<form action='../controller/carrito.php' method='post'>";
            echo "<input type='hidden' name='txtId' value='$p->Id'>";
            echo "<input type='hidden' name='txtMarca' value='$p->Marca'>";
            echo "<input type='hidden' name='txtTipo' value='$p->Tipo'>";
            echo "<input type='hidden' name='txtClase' value='$p->Clase'>";
            echo "<input type='hidden' name='txtPrecio' value='$p->Precio'>";

            echo "<input type='number' name='txtCantidad'>";
            echo "<input type='submit' name='btnAnadir' value='Añadir'>";
            echo "</td>";

              echo "</tr>";
             echo "</form>";
          }

          ?>


        </tbody>
        </table>
        </div>
        </div>
      
        



      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      </body>
      </html>