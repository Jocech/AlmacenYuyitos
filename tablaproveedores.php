<?php include("db.php") ?>
<?php include("includes/header.php") ?>


<div class="col-md-8">
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th>Id</th>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM proveedores";
            $result_proveedores = mysqli_query($conn, $query);
                        
                while($row = mysqli_fetch_array($result_proveedores)) { ?>
                    <tr>
                        <td> <?php echo $row['id']  ?> </td>
                        <td> <?php echo $row['rut']  ?> </td>
                        <td> <?php echo $row['nombre']  ?> </td>
                        <td> <?php echo $row['correo']  ?> </td>
                        <td> <?php echo $row['telefono']  ?> </td>
                        <td> 
                        <!--<a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                        </a>-->
                        </td>
                        <td> 
                            <a href="deleteproveedor.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                <?php } ?>
        </tbody>
    </table>
</div>

<?php include("includes/footer.php") ?>