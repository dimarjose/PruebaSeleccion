<?php
    include("conexion.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM contacto WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        if (mysqli_num_rows($result) == 1 ){
            $row = mysqli_fetch_array($result);
            $name = $row['name'];
            $phone = $row['phone'];
            $date = $row['date'];
            $address = $row['address'];
            $email = $row['email'];
        }
    }

    if (isset($_POST['update'])){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        $query = "UPDATE contacto SET name = '$name', phone='$phone', date = $date, address='$address', email = '$email' WHERE id = $id ";
        $result = mysqli_query($conexion, $query);
        header("Location: index.php");
    }
?>

<?php include("include/header.php") ?>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="update.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" value="<?php echo $name?>"
                        class="form-control" placeholder="Actualizar Nombre">
                    </div>
                    <div class="form-group">
                    <input type="number" name="phone" value="<?php echo $phone?>"
                        class="form-control" placeholder="Actualizar Telefono">
                    </div>
                    <div class="form-group">
                    <input type="date" name="date" value="<?php echo $date?>"
                        class="form-control" placeholder="Actualizar Fecha de Nacimiento">
                    </div>
                    <div class="form-group">
                    <input type="text" name="address" value="<?php echo $address?>"
                        class="form-control" placeholder="Actualizar Direccion">
                    </div>
                    <div class="form-group">
                    <input type="text" name="email" value="<?php echo $email?>"
                        class="form-control" placeholder="Actualizar Correo Electronico">
                    </div>
                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
<?php include("include/footer.php") ?>
