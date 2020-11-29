<?php include("db.php") ?>
<?php include("includes/header.php") ?>


<div class="col-md-8">
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th>Número Boleta</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM venta";
            $result_venta = mysqli_query($conn, $query);
                        
                while($row = mysqli_fetch_array($result_venta)) { ?>
                    <tr>
                        <td> <?php echo $row['id']  ?> </td>
                        <td> <?php echo $row['cantidad']  ?> </td>
                        <td> <?php echo $row['total']  ?> </td>
                        <td> <?php echo $row['fecha']  ?> </td>
                        <td> 
                        <!--<a href="edit.php?id=<?php //echo $row['id']?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                        </a>-->
                        </td>
                        <td> 
                            <a href="deleteventa.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                <?php } ?>
        </tbody>
    </table>
</div>




<?php include("includes/footer.php") ?>