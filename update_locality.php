<?php
//page updating data from user

include 'connect_locality.php';
$id=$_GET['updateid'];
$sql="Select * from `database` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$wingname=$row['wingname'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$contactno=$row['contactno'];

if(isset($_POST['submit'])){
    $wingname= $_POST['wingname'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $contactno= $_POST['contactno'];

    $sql="update`database` set id=$id,wingname='$wingname',firstname='$firstname',lastname='$lastname',contactno='$contactno' where id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
       // echo "Updated successfully";
        header('location:display_locality.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update User Information</title>
</head>

<body>
    <div class="container my-4">
        <form method="post">
            <div class="form-group">
                <label>Wing Name</label>
                <input type="text" class="form-control" placeholder="Enter the Wing Name" name="wingname" autocomplete = "off" value=<?php  echo $wingname;?>>
            </div>

            <div class="container my-4">
        <form method="post">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter your First Name" name="firstname" autocomplete = "off" value=<?php  echo $firstname;?>>
            </div>

            <div class="container my-4">
        <form method="post">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter your Last Name" name="lastname" autocomplete = "off" value=<?php  echo $lastname;?>>
            </div>

            <div class="container my-4">
        <form method="post">
            <div class="form-group">
                <label>Contact No</label>
                <input type="text" class="form-control" placeholder="Enter your Contact No" name="contactno" autocomplete = "off" value=<?php  echo $contactno;?>>
            </div>

            <button type="submit" class="btn btn-success" name = "submit">Update</button>
        </form>
    </div>


</body>

</html>