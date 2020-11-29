<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<!--Aquí irá la tabla que liste todas las tareas que he registrado-->
<div class="col-md-8">
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $query = "SELECT * FROM productos";
            $result_productos = mysqli_query($conn, $query);
                        
                while($row = mysqli_fetch_array($result_productos)) { ?>
                    <tr>
                        <td> <?php echo $row['id']  ?> </td>
                        <td> <?php echo $row['nombre']  ?> </td>
                        <td> <?php echo $row['marca']  ?> </td>
                        <td> <?php echo $row['compra']  ?> </td>
                        <td> <?php echo $row['venta']  ?> </td>
                        <td> 
                        <!--<a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                        </a>-->
                        </td>
                        <td> 
                            <a href="deleteproducto.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                <?php } ?>
        </tbody>
    </table>
</div>


<?php include("includes/footer.php") ?>