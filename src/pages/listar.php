<?php
//Listar
require_once "../backend/config/Database.php";
require_once "../backend/controllers/ProductController.php";
$producto= new ProductController();
$resultado = $producto->listProduct();

foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['id'] . "</td>
            <td>" . $data['nombre'] . "</td>
            <td>" . $data['marca'] . "</td>
            <td>" . $data['precio'] . "</td>
            <td>" . $data['cantidad'] . "</td>
            <td>
                <button type='button' class='btn btn-primary' onclick=Editar('" . $data['id'] . "')  data-bs-toggle='modal' data-bs-target='#mimodal'>Editar</button>
                <button type='button' class='btn btn-danger' onclick=Eliminar('" . $data['id'] . "')>Eliminar</button>
            </td>        
        </tr>";
}
