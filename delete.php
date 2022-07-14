<?php
    include("conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM contacto WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed");
        }

        header("Location: index.php");
        
    }
?>