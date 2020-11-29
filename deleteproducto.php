<?php    
    include("db.php");


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM productos Where id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query failed ");
        }

        //$_SESSION['message'] = 'Task Deleted';
        //$_SESSION['message_type'] = 'danger';
        header("Location: tablaproducto.php");
    }
?>