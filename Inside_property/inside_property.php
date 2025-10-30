<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property</title>
    <link rel="stylesheet" href="inside_property.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="header">
    <nav class="navbar" style="position: fixed; z-index: 1;">
          <div class="brand-name">
            <a href="#" style="text-decoration: none;">
              <h1>Home <span>Rental</span></h1>
            </a>
          </div>
          <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </a>
          
            <div class="navbar-links">
              <ul class="nav-list">
                <li class="nav-items"><a href="../index.html">Home</a></li>
                <li class="nav-items"><a href="../View_Homes.php">View Homes</a></li>
                <li class="nav-items"><a href="../About Us\about.html">About Us </a></li>
                <li class="nav-items"><a href="../Help/help.html">Help</a></li>
              </ul>
            </div>
    
          </nav>
    </div>


    <div class="main_content" style="margin-top: 7rem;">

    <!-- PHP CODE  -->

    <?php
      // include 'Login Page/Database/owner_data.php';

        //Connecting to the DATABASE------
        $con = mysqli_connect('localhost', 'root', '', 'project') or die("Connection Failed");

        // $id = $_GET['id'];
        // $owner_name = $_SESSION['owner_name'];
        $property_image = $_GET['image'];
        // $property_images = $_SESSION['propertypicfile'];
        //Fetching the data from database -----

        $sql = "SELECT * FROM owner_page Where property_images = '$property_image' ";
        $result = mysqli_query($con,$sql) or die("Query Failed");
        $data = mysqli_num_rows($result)>0 ;

        if($data)
        {
            
            while ($row = mysqli_fetch_array($result) ) {
            
                $email = $row['email'];
            ?>
                <!-- Bootstrap Carousel -->

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <!-- Displaying Image in the Slider- -->
        <div class="carousel-inner">
          <div class="carousel-item active">
          <!-- Retriving All The Images -->
          <!-- <?php
                // $sql = "SELECT * FROM owner_page Where property_images = '$property_image' ";
                // $result = mysqli_query($con,$sql) or die("Query Failed");
                // $data = mysqli_num_rows($result)>0 ;
                // if($data)
                //   {
                //     $i=0;
                //       while ($row = mysqli_fetch_array($result) ) {
                        
                //         // $i= $i+1;
          ?> -->
            
            <img src="../Login Page/<?php echo $row['property_images']; ?>" height = "400" width = "400" class="d-block w-100" alt="...">
          
          </div>
          <div class="carousel-item">
            <!-- <img src="2.jpg" class="d-block w-100" alt="...">-->
            <img src="../Login Page/<?php echo $row['property_images1']; ?>" height = "400" width = "400" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <!--<img src="1.jpg" class="d-block w-100" alt="...">-->
            <img src="../Login Page/<?php echo $row['property_images2']; ?>" height = "400" width = "400" class="d-block w-100" alt="...">
          </div> 
          <div class="carousel-item">
            <!--<img src="1.jpg" class="d-block w-100" alt="...">-->
            <img src="../Login Page/<?php echo $row['property_images3']; ?>" height = "400" width = "400" class="d-block w-100" alt="...">
          </div> 
          <div class="carousel-item">
            <!--<img src="1.jpg" class="d-block w-100" alt="...">-->
            <img src="../Login Page/<?php echo $row['property_images4']; ?>" height = "400" width = "400" class="d-block w-100" alt="...">
          </div> 
          <div class="carousel-item">
            <!--<img src="1.jpg" class="d-block w-100" alt="...">-->
            <img src="../Login Page/<?php echo $row['property_images5']; ?>" height = "400" width = "400" class="d-block w-100" alt="...">
          </div> 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="overview1">
        <center>
          <h2>Overview</h2>
        </center>
        <div class="main_box">

          
          <div class="box">
            <h4><u>Owner Name:</u></h4>
            <p id="box_para"><?php echo $row['owner_name']; ?></p>
          </div>
          <div class="box">
            <h4><u>Society Name:</u></h4>
            <p id="box_para"><?php echo $row['society_name']; ?></p>
          </div>
          <div class="box">
            <h4><u>Caste:</u></h4>
            <p id="box_para"><?php echo $row['caste']; ?></p>
          </div>
          <div class="box">
            <h4><u>Address:</u></h4>
            <p id="box_para"><?php echo $row['address']; ?></p>
          </div>
          <div class="box">
            <h4><u>Rent:</u></h4>
            <p id="box_para"><?php echo $row['price']; ?></p>
          </div>
          <div class="box">
            <h4><u>Sq.ft:</u></h4>
            <p id="box_para"><?php echo $row['sq_ft']; ?></p>
          </div>
          <div class="box">
            <h4><u>Bhk:</u></h4>
            <p id="box_para"><?php echo $row['bhk']; ?></p>
          </div>
          <div class="box">
            <h4><u>Area:</u></h4>
            <p id="box_para"><?php echo $row['city']; ?></p>
          </div>
        </div>
        </div>
        
        <?php
            }
        }
        else{
            echo "No data Found";
        }
        // mysqli_close($con);
        //PHP CODE FINISHED----
    ?>

        <!-- PHP Code For Retriving contact- -->

        <?php
                $sql1 = "SELECT * FROM project Where email = '$email' ";
                $result1 = mysqli_query($con,$sql1) or die("Query Failed");
                // $data1 = mysqli_num_rows($result1)>0 ;
                // if($data1)
                  // { 
                    
                      while ($row1 = mysqli_fetch_array($result1) ) {
                      $whatno = $row1['whatno'];
          ?> 
      <div class="contact">
        <div id="contact_inside">
          <h4 id="contact_heading">Owner Name</h4>
          <a href="https://wa.me/<?php echo $whatno ; ?>">
            <button id="contact_button">Contact Now</button>
          </a>
        </div>
      </div>

            
  </div>
      <?php
            }
        // }
        // else{
        //     echo "No data Found";
        // }
        mysqli_close($con);
        //PHP CODE FINISHED----
    ?>
     

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<!-- DONE -->

 <!-- <?php
                    //   }
                    // }
                    // else{
                    //   echo "No Data Found";
                    // }
                    // mysqli_close($con);
                    ?> -->