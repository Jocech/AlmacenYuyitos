
<?php include("includes/header.php"); ?> 
<!--Inicio del código-->

<?php 

include("db.php");  //importe de la conexion a la base de datos

if(isset($_POST['save_producto'])){
    $nombre = $_POST['nombre'];  //Esto hace referencia al name del input usado en el form 
    $marca = $_POST['marca'];  //Esto hace referencia al name del input usado en el form 
    $compra = $_POST['compra'];  //Esto hace referencia al name del input usado en el form 
    $venta = $_POST['venta']; //Significa que envia en metodo post lo que este dentro del input y lo guarda en la variable
    
    $query = "INSERT INTO productos(nombre, marca, compra, venta) VALUES ('$nombre', '$marca','$compra','$venta')"; 
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Caida");
    }

    //$_SESSION['message'] = 'Producto Guardado';  //Esto escribe Tarea Guardada
    //$_SESSION['message_type'] = 'success';   //Esto hace que el color sea 'success' que es el verde de bootstrap

    //echo "Guardado";  //Esto solo sirve como prueba para verificar si el guardado funciona

    header("Location: saveproducto.php"); //Esto redirecciona cuando el codigo ya se completo (sigue estando dentro del if())
}

?>

<!--Este será el formulario-->
<div class="col-md-4">
        <div class="card card-body">
            <form action="saveproducto.php" method="POST">
                <div class="form-group">     <!--Esta clase sirve para separar los input, es una clase de bootstrap-->
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre del Producto" id="" autofocus> 
                </div>
                <div class="form-group">
                    <input type="text" name="marca" class="form-control" placeholder="Marca del Producto" id="" autofocus> 
                </div>
                <div class="form-group">
                    <input type="number" name="compra" class="form-control" placeholder="Valor de Compra" id="" autofocus> 
                </div>
                <div class="form-group">
                    <input type="number" name="venta" class="form-control" placeholder="Valor de Venta" id="" autofocus> 
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save_producto" value="Guardar Producto">
            </form>
        </div>
</div>


<?php include("includes/footer.php"); ?> 