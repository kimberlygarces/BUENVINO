
<?php
require_once "producto.php";

//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"Buenvino") or die("Error conectandose a la BD ");

        
        class Data{

            private $con;

            public function __construct(){

                $conexion = mysqli_connect("localhost","root","","Buenvino") or die("ERROR: ".mysqli_error($conexion));

            }

            public function getProductos(){
    
                $productos = array();

                $conexion = mysqli_connect("localhost","root","","Buenvino") or die("ERROR: ".mysqli_error($conexion));


                $sql = "SELECT * FROM Productos";

                //EJECUTAR LA CONSULTA
              $res = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));

                while($reg = mysqli_fetch_array($res)){

                    $p = new productos();


                    $p->Id = $reg[0];
                    $p->Marca = $reg[1];
                    $p->Tipo = $reg[2];
                    $p->Clase = $reg[3];
                    $p->Precio = $reg[5];
                    $p->Cantidad = $reg[6];
                    $p->Oferta = $reg[7];

                    array_push($productos, $p);
                }

                return $productos;

            }

        }

?>