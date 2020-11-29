<?php include("includes/header.php"); ?>


<?php 

include("db.php");  //importe de la conexion a la base de datos

if(isset($_POST['save_proveedor'])){
    $rut = $_POST['rut'];  //Esto hace referencia al name del input usado en el form 
    $nombre = $_POST['nombre'];  //Esto hace referencia al name del input usado en el form 
    $correo = $_POST['correo'];  //Esto hace referencia al name del input usado en el form 
    $telefono = $_POST['telefono']; //Significa que envia en metodo post lo que este dentro del input y lo guarda en la variable
    
    $query = "INSERT INTO proveedores(rut, nombre, correo, telefono) VALUES ('$rut', '$nombre','$correo','$telefono')"; 
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Caida");
    }

    //$_SESSION['message'] = 'Producto Guardado';  //Esto escribe Tarea Guardada
    //$_SESSION['message_type'] = 'success';   //Esto hace que el color sea 'success' que es el verde de bootstrap

    //echo "Guardado";  //Esto solo sirve como prueba para verificar si el guardado funciona

    header("Location: saveproveedor.php"); //Esto redirecciona cuando el codigo ya se completo (sigue estando dentro del if())
}

?>


<!--Este será el formulario-->
<div class="col-md-4">
        <div class="card card-body">
            <form action="saveproveedor.php" method="POST">
                <div class="form-group">     <!--Esta clase sirve para separar los input, es una clase de bootstrap-->
                    <input type="text" name="rut" class="form-control" placeholder="Rut del Proveedor" id="" autofocus>
                    <p class="text-center"><small>Ingrese el Rut del proveedor sin puntos ni guíones.</small></p>
                </div>
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre del Proveedor" id="" autofocus> 
                </div>
                <div class="form-group">
                    <input type="email" name="correo" class="form-control" placeholder="Correo Electrónico" id="" autofocus> 
                </div>
                <div class="form-group">
                    <input type="number" name="telefono" class="form-control" placeholder="Teléfono" id="" autofocus> 
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save_proveedor" value="Guardar Proveedor">
            </form>
        </div>
</div>


<?php include("includes/footer.php"); ?> 