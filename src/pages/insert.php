<?php
//insertar y editar productos
require_once "../backend/config/Database.php";
require_once "../backend/controllers/ProductController.php";


if (isset($_POST['nombre']) && isset($_POST['marca']) && isset($_POST['precio']) && isset($_POST['cantidad']) ) {
    $producto = new ProductController();
    
    $fecha = new DateTime();

    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $date = $fecha->getTimestamp();
    
    if (empty($_POST['idp'])){
        $producto->newProduct($nombre, $marca, $precio, $cantidad, $date, $date);
    }else{
        $id = $_POST['idp'];
        $query = $pdo->prepare("UPDATE productos SET codigo = :cod, producto = :pro, precio =:pre, cantidad = :cant WHERE id = :id");
        echo "modificado";
    }
    
}
