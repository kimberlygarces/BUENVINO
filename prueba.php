<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "Model/Data.php";

    $d = new Data();

    $productos = $d->getProductos();

    foreach($productos as $p){
        echo $p->Id." - ".$p->Marca." - ".$p->Tipo." - ".$p->Clase." - ".$p->Precio." - ";
        echo "<br>";
    }
    ?>

echo '<tr>';

echo "<td>".$p->.$Id."</td>";
echo "<td>".$p->.$Marca."</td>";
echo "<td>"..$p->.$Tipo."</td>";
echo "<td>".$p->.$Clase."</td>";
echo "<td>".$p->.$Precio."</td>";
echo "<td>"
    echo "<form action='' method='post'>";

    echo "<input type='number' name=''>";
    echo "<input type='submit' name='btnAñadir'>";

echo "</tr>";

</body>
</html>