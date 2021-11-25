<?php

$sql = "";

class ProductController
{
    

    public function newProduct($nombre,$marca, $precio,$fecha)
    {
        $db = new Database();
        // sql para insert
        $sql = "INSERT INTO tabla301127A_954 (name, mark, price, quantity, created_at, updated_at)
        VALUES ('John', 'Doe', 'john@example.com', $fecha->getTimestamp(), $fecha->getTimestamp())";

        if ($db->conn->query($sql) === true) {
            return "ok";
        } else {
            echo "Error: " . $db->conn->error;
        }

        $db->conn->close();
    }

    public function listProduct()
    {
        $db = new Database();
        $sql = "SELECT * FROM tabla301127A_954 ORDER BY id DESC";        
        $resultado = $db->conn->query("SELECT * FROM tabla301127A_954");
        if ($resultado) {
           return $resultado -> free_result();
        }             
        $db->conn->close();
    }
}