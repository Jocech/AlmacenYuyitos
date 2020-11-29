<?php include("includes/header.php"); ?>


<?php 

include("db.php");  //importe de la conexion a la base de datos

if(isset($_POST['save_venta'])){
    $cantidad = $_POST['cantidad'];  //Esto hace referencia al name del input usado en el form 
    $total = $_POST['total'];  //Esto hace referencia al name del input usado en el form 
    
    $query = "INSERT INTO venta(cantidad, total) VALUES ('$cantidad', '$total')"; 
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Caida");
    }

    //$_SESSION['message'] = 'Producto Guardado';  //Esto escribe Tarea Guardada
    //$_SESSION['message_type'] = 'success';   //Esto hace que el color sea 'success' que es el verde de bootstrap

    //echo "Guardado";  //Esto solo sirve como prueba para verificar si el guardado funciona

    header("Location: saveventa.php"); //Esto redirecciona cuando el codigo ya se completo (sigue estando dentro del if())
}

?>

<!--Este será el formulario-->
<div class="col-md-4">
        <div class="card card-body">
            <form action="saveventa.php" method="POST">
                <div class="form-group">     <!--Esta clase sirve para separar los input, es una clase de bootstrap-->
                    <input type="number" name="cantidad" class="form-control" placeholder="Cantidad de productos" id="" autofocus>
                </div>
                <div class="form-group">
                    <input type="number" name="total" class="form-control" placeholder="Total" id="" autofocus> 
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save_venta" value="Guardar Venta">
            </form>
        </div>
</div>


<?php include("includes/footer.php"); ?> 