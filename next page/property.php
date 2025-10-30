<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homes</title>
    <!-- <link rel="stylesheet" href="property.css"> -->
    <link rel="stylesheet" href="/Project/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>
<body>
    <!-- <nav class="navbar">
        <div class="brand-title">Home Rental</div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Find Home</a></li>
                <li><a href="#">List Property</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>
    </nav> -->

    <nav class="navbar">
        <div class="brand-name">
        <a href="../index.html" style="text-decoration: none;">
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
              <li class="nav-items"><a href="../Login Page/Viewproperty.php">Find Home</a></li>
              <li class="nav-items"><a href="">List Property</a></li>
              <li class="nav-items"><a href="../Help/help.html">Help</a></li>
            </ul>
          </div>
        
       
      </nav>

    
        <!-- <div class="cards">
            <div id="card-1" class="allcard">
                <img src="1.jpg" alt="Img">
                <h3 class="h1">$200 <span class="month">/ month</span> 
                 <button class="cardsbtn">2 BHK</button></h3> 
                <p class="p1">Sundaram Apartment</p>
            </div>

            <div id="card-1" class="allcard"> 
                <img src="2.jpg" alt="Img">
                <h3 class="h1">$200 <span class="month">/ month</span>  
                <p class="p1">Sundaram Apartment</p>
            </div>
        
            <div id="card-1" class="allcard"> 
                <img src="3.jpg" alt="Img">
                <h3 class="h1">$200 <span class="month">/ month</span>   
                <p class="p1">Sundaram Apartment</p>
            </div>

            <div id="card-1" class="allcard"> 
                <img src="4.jpg" alt="Img">
                <h3 class="h1">$200 <span class="month">/ month</span>   
                <p class="p1">Sundaram Apartment</p>
            </div>

            <div id="card-2" class="allcard"> 
                <img src="5.jpg" alt="Img">
                <h3 class="h1">$300 <span class="month">/ month</span>   
                <p class="p1">Sundaram Apartment</p>
            </div>

            <div id="card-1" class="allcard"> 
                <img src="7.jpg" alt="Img">
                <h3 class="h1">$300 <span class="month">/ month</span>   
                <p class="p1">Sundaram Apartment</p>
            </div>

            <div id="card-1" class="allcard"> 
                <img src="8.jpg" alt="Img">
                <h3 class="h1">$300 <span class="month">/ month</span> 
                <p class="p1">Sundaram Apartment</p>
            </div>

            <div id="card-3" class="allcard"> 
                <img src="9.jpg" alt="Img">
                <h3 class="h1">$300 <span class="month">/ month</span>  
                <p class="p1">Sundaram Apartment</p>
            </div>
        </div> -->

        <!-- PHP CODE- -->

        <?php
            // include './Login Page/Database/owner_data.php';
            //Connect To the database....
                $con = mysqli_connect('localhost', 'root', '', 'project') or die("Connection Failed");
            
                    // $id = $_GET['id'];
                    // $owner_name = $_SESSION['owner_name'];
                    $sql = "SELECT * FROM owner_page  ";
                    $result = mysqli_query($con,$sql) or die("Query Failed");
                    $data = mysqli_num_rows($result)>0 ;

                    if($data)
                    {
                        while ($row = mysqli_fetch_array($result) ) {
                        ?>
                            <div class="container">
                                <div class="cards">
                                <!-- <h1>Your Property Card:</h1> -->
                                    <div id="card-1" class="allcard">
                                        <img src="/Project/Login Page/<?php echo $row['property_images']; ?>" height = "200" width = "200" alt="Img">
                                        <h3 class="h1">$200 <span class="month">/ month</span> 
                                        <!-- <button class="cardsbtn">2 BHK</button></h3> -->
                                        <p class="p1">Sundaram Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                    else{
                        echo "No data Found";
                    }
                    mysqli_close($con);
                ?>

    <!-- </div> -->
    <script src="property.js"></script>
</body>
</html>