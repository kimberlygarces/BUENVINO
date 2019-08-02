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
            <a class="nav-link" href="../Cliente/cliente.php">Productos</a>
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

      <div class="col-sm-12 col-lg-8">

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
                         echo "<td>",'TIPO',"</td>";
                          echo "<td>",'MARCA',"</td>";
                          echo "<td>",'CLASE',"</td>";
                          echo "<td>",'PRECIO',"</td>";
                          echo "<td>",'CANTIDAD',"</td>";
                          echo "<td>",'SUBTOTAL',"</td>";
                          "<tr>";
                        
                          $Iva =0;
                          $total = 0;
                          $totalpago=0;
                          $totalC=0;


                          foreach($carrito as $p){

                            echo "<tr>";
                              echo "<td>".$p->Id."</td>";
                              echo "<td>".$p->Tipo."</td>";
                             echo "<td>".$p->Marca."</td>";
                             echo "<td>".$p->Clase."</td>";
                              echo "<td>".$p->Precio."</td>";
                              echo "<td>".$p->Cantidad."</td>";
                              echo "<td>".$p->SubTotal."</td>";

                              $total += $p->SubTotal;
                              $totalC += $p->Cantidad;

                              echo "</tr>";
                              }

                              echo "<tr>";
                                  echo "<td colspan='6'>",'TOTAL',"</td>";
                                  echo "<td>".$total."</td>";

                                  echo "</tr>";
                                  echo "<tr>";
                                  echo "<td colspan='6'>",'IVA',"</td>";
                                $Iva = $total*0.19;
                                  echo "<td>".$Iva."</td>";
                                  echo "</tr>";
                                  
                                  echo "<td colspan='5'>",'TOTAL A PAGAR',"</td>";
                                 $totalpago = $Iva+$total;
                                    echo "<td>".$totalC."</td>";
                                    echo "<td>".$totalpago."</td>";
                                    echo "</tr>";
                                    
                      echo "</table>";

                            }
                      ?>
                     </div>
                      

                      <div class='col-sm-12 col-lg-4'>
                      <?php

                    //COMPRA
                      
                    echo "<form action='../controller/NuevaCompra.php' method='post'>";

                    echo "<label>Nombre y apellido</label>";
                    echo "<input class='form-control' type='text' name='Cliente'>";

                    echo "<label>Direccion de Envio</label>";
                    echo "<input class='form-control' type='text' name='Direccion'>";

                    echo "<label>Tarjeta de Credito</label>";
                    echo "<input class='form-control' type='text' name='Credito'>";
                    echo "<input type='hidden' name='txtC' value='$totalC'>";
                    echo "<input type='hidden' name='txtTotal' value='$totalpago'>";

                      //DETALLE DE LA COMPRA

                   
                 


                    echo "<input type='hidden' name='txtId' value='$p->Id'>";
                    echo "<input type='hidden' name='txtCantidad' value='$p->Cantidad'>";
                    echo "<input type='hidden' name='txtPrecio' value='$p->SubTotal'>";

                
                   

                              echo "<br>";
                      echo "<input class='btn btn-primary'type='submit' value='Enviar'>";

          
          
                        echo "</tr>";
                       echo "</form>";

                        
              
              
              ?>

              
</div>
       </div> 
       </div> 




      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      </body>
      </html>