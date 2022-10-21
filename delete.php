<?php
require 'connection.php';
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    // $sql = "delete form `crud_table` where id=$id";
    $sql = "DELETE FROM `crud_table` WHERE `crud_table`.`id=$id";
    $result = mysqli_query($conn , $sql);
    print_r($_GET);
    if($result){
        echo "succefully deleted";
    }
    else {
        echo "not deleted";
    }

}



?>