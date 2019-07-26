<?php
    require_once "../Model/Data.php";


        $p = new Productos();

        $p->Cantidad = $_POST["txtCantidad"];
        $p->Id =  $_POST["txtId"];
        $p->Marca =  $_POST["txtMarca"];
        $p->Tipo =  $_POST["txtTipo"];
        $p->Clase =  $_POST["txtClase"];
        $p->Precio =  $_POST["txtPrecio"];
        $p->SubTotal =  $_POST["txtPrecio"]*$_POST["txtCantidad"];


        session_start();

            if(isset($_SESSION["carrito"])){
                $carrito = $_SESSION["carrito"];
            }else{

                $carrito = array();
            }

            array_push($carrito, $p);

            $_SESSION["carrito"] = $carrito;

            header("location:../Cliente/cliente.php")
        ?>