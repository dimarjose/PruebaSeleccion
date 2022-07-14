<?php include("conexion.php")?>

<?php include("include/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

           

            <div class="card card-body">
                <form action="new.php" method="POST">
                    <div class="form-group p-2">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group p-2">
                        <input type="number" name="phone" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group p-2">
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="form-group p-2">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                    <div class="form-group p-2">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <input type="submit" class="btn p-2 btn-success btn-block" name="save_contact" value="Guardar contacto">
                </form>
            </div>
        </div>

        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Direccion</th>
                            <th>Correo Electronico</th>
                            <th>Gestion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM contacto";
                            $result = mysqli_query($conexion, $query);

                            while($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td>
                                        <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php }
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
    
<?php include("include/footer.php")?>