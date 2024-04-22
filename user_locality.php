<?php
// page taking data from user

include 'connect_locality.php';
if(isset($_POST['submit'])){
    $wingname= $_POST['wingname'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $contactno= $_POST['contactno'];

    $sql="insert into `database` (wingname, firstname, lastname, contactno)
    values( '$wingname','$firstname','$lastname','$contactno')";
    $result=mysqli_query($con,$sql);

    if($result){
       // echo "Data inserted successfully";
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

    <title>User Information</title>
</head>

<body>
    <div class="container my-4">
        <form method="post">
            <div class="form-group">
                <label>Wing Name</label>
                <input type="text" class="form-control" placeholder="Enter the Wing Name" name="wingname" autocomplete = "off">
            </div>

            <div class="container my-4">
        <form method="post">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter your First Name" name="firstname" autocomplete = "off">
            </div>

            <div class="container my-4">
        <form method="post">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter your Last Name" name="lastname" autocomplete = "off">
            </div>

            <div class="container my-4">
        <form method="post">
            <div class="form-group">
                <label>Contact No</label>
                <input type="text" class="form-control" placeholder="Enter your Contact No" name="contactno" autocomplete = "off">
            </div>

            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>
    </div>


</body>

</html>