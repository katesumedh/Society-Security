<?php
//main page displaying database

include 'connect_locality.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Apartment residents monitoring and security</title>
    <link rel="stylesheet" href="locality.css">
</head>

<body>
    <!-- Bootstrap jscript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Home page code start -->


    <div class="page">
        <header tabindex="0">Apartment Security</header>
        <div id="nav-container">
            <div class="bg"></div>
            <div class="button" tabindex="0">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <div id="nav-content" tabindex="0">
                <ul>
                    <li><a href="/index.html">Home</a></li>
                    <li><a href="/services.html">Services</a></li>
                    <li><a href="/display_locality.php">Locality</a></li>
                    <li><a href="/about.html">About Us</a></li>
                    <li><a href="/contact_us.php">Contact Us</a></li>
                    <li class="small"><a href="#0">Facebook</a><a href="#0">Instagram</a></li>
                </ul>
            </div>
        </div><br>


        <main class="main">
            <!--carousel start -->
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="localityimg.jfif" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Welcome to Blue Ridge</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="locality1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="locality2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--carousel end -->
            <br><br>
            <!--table start -->

            <div class="container">
                <button class="btn btn-primary my-4"><a href="user_locality.php" class="text-light">Add to Database</a>
                </button>

                <table class="table table-secondary table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sr No</th>
                            <th scope="col">Wing Name</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <<th scope="col">Contact No</th>
                            <<th scope="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <?php

                            $sql = "Select * from `database`";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $wingname = $row['wingname'];
                                    $firstname = $row['firstname'];
                                    $lastname = $row['lastname'];
                                    $contactno = $row['contactno'];

                                    echo '<tr>
    <th scope="row">' . $id . '</th>
    <td>' . $wingname . '</td>
    <td>' . $firstname . '</td>
    <td>' . $lastname . '</td>
    <td>' . $contactno . '</td>
    <td>
   <button class="btn btn-success"><a href="update_locality.php?updateid='. $id .'" class="text-light">Update</a></button>
   <button class="btn btn-danger"><a href="delete_locality.php?deleteid='. $id .'" class="text-light">Delete</a></button>
    </td>
  </tr>';
                                }
                            }

                            ?>

                    </tbody>
                </table>
        </main>
    </div>
    <!--table end -->
    <!-- home page code end -->


</body>

</html>