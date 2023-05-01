<?php
    require_once('connection.php');
    if(isset($_GET['Del'])){
        $id = $_GET['Del'];
        $query = "DELETE FROM clientes WHERE id = '".$id."'";
        $result = mysqli_query($con, $query);

        if($result){
            header("location:view.php");
        }else{
            echo 'Erro';
        }

    }        else{
        echo("location:view.php");
    }

?>