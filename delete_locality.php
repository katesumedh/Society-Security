<?php

//delete from database

include 'connect_locality.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `database` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Deleted Successfully";
       header('location:display_locality.php');
    }else{
        die(mysqli_error($con));
    }
}

?>