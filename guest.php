
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $mnub = $_POST['mnub'];
        $vnub = $_POST['vnub'];
        $adress = $_POST['adress'];
        $fnub = $_POST['fnub'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $vdose = $_POST['vdose'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "formguest";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql ="INSERT INTO `formguest` (`sno`, `name`, `mnub`, `vnub`, `adress`, `fnub`, `city`, `state`, `zip`, `vdose`, `date`) VALUES ('', '$name', '$mnub', '$vnub', '$adress', '$fnub', '$city', '$state', '$zip', '$vdose', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>








<!doctype html>
<html lang="en">
<link rel="stylesheet" href="guest.css">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Guest</title>
</head>

<body>
<nav class="navbar navbar-dark bg-dark nav justify-content-center">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Guest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav justify-content-centers">
          <li class="nav-item">
            <a class="nav-link " href="/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="guest.php">Guest</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="maid.html">Maid</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="business.html">Business Order</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- second nav bar end -->
  
  

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  


    <main class="main">
  <h1 class="wlc">Welcome User</h1>
  <!-- ofcanvass start -->.
  <div>

    <button id="but" class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      Need Help?
    </button>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Help?</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div>
         1.Enter the information according to the instructions given. 
         <br>
         2.Pick the correct date and time.
         <br>
         3.Please upload a clear image of your photo and ID proof (Aadhar card, Driving License, PAN card)
         <br>
         4.If you have any problem or queries. please go to our <a href="/contact_us.php">Contact Us</a> page.
         <br>
        </div>
       
      </div>
    </div>
  </div> <br> <br>
  <!-- ofcanvass end -->
  
  <!-- form start -->
 
  <div class="container">
  <form action="\guest.php" method="post">
    <div class="row">
      <div class="col-md-6">
        <label for="ark1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name" aria-label="First name" id="ark1">

    </div>
    <br>
    <form class="row g-3">
      <div class="col-md-5">
        <label for="inputEmail4" class="form-label">Mobile Number</label>
        <input type="number" name="mnub" class="form-control" id="inputnumber4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Vehicle Number</label>
        <input type="text" name="vnub" class="form-control" id="inputvehicleno">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" name="adress" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label col-4">Flat no.</label>
        <input type="text" name="fnub" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="col-md-4">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" name="city" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" name="state" class="form-select">
          <option selected>Choose...</option>
          <option>Maharashtra</option>
          <option>Goa</option>
          <option>Madhya Pradesh</option>
          <option>Uttar Pradesh</option>
          <option>Karnataka</option>
          <option>Delhi</option>
          <option>Uttarakhand</option>
          <option>Bihar</option>
        </select>

      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" name="zip" class="form-control" id="inputZip">
      </div>
      <div class="form-label col-4">

        <label for="lol" class="form-label ">Vaccine dose completed</label>
        <select class="form-select " name="vdose" aria-label="Default select example" id="lol">
          <option selected>Choose...</option>
          <option value="1">Zero</option>
          <option value="2">One</option>
          <option value="3">Two</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Date</label>
        <input type="date" class="form-control" id="inputZip">
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Time</label>
        <input type="time" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Will You Stay Overnight?
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-outline-dark">Submit</button>
      </div>
    </form>
  </div>
  <!-- form end -->
  <br><br><br><br>
  </main>
</body>

</html>
