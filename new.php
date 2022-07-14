<?php
    include("conexion.php");

    if(isset($_POST['save_contact'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        $query = "INSERT INTO contacto(name,phone,date,address,email) VALUES ('$name', '$phone', '$date', '$address', '$email')";

        $result = mysqli_query($conexion, $query);
        if(!$result){
            die("Query Failed");
        }

        header("Location: index.php");
    }
?>