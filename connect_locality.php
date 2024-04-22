<?php

//connecting all pages and buttons

$username="root";

$con=new mysqli('localhost','root','','locality');
if($con){
   // echo  "Connection successful";
}else{
    die(mysqli_error($con));
}


?>