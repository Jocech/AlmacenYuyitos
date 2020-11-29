<?php    
    include("db.php");


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM venta Where id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Caida ");
        }

        //$_SESSION['message'] = 'Task Deleted';
        //$_SESSION['message_type'] = 'danger';
        header("Location: tablaventa.php");
    }
?>