
<?php
// $con = mysqli_connect('localhost', 'root', '', 'project') or die("Connection Failed");
include 'Login Page/Database/owner_data.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Page</title>
    <link rel="stylesheet" href="view_homes.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<nav class="navbar">
        <div class="brand-name">
        <a href="http://localhost/Project/" style="text-decoration: none;">
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
            <form action="SortedProperty.php" method="GET">
                <div class="input-group mb-3" style="margin-top: 0.9rem;">
                    <input type="text" class="form-control" placeholder="Search Area.." aria-label="Recipient's username" aria-describedby="basic-addon2" name="search" value="<?php if(isset($_GET['search'])){
                        echo $_GET['search'];

                    } 
                    ?>">
                    <button class="input-group-text" type="submit">Search</button>
                  </div>
                 
            </form>
              <li class="nav-items"><a href="http://localhost/Project/">Home</a></li>
              <li class="nav-items"><a href="http://localhost/Project/View_Homes.php">View Homes</a></li>
              <li class="nav-items"><a href="http://localhost/Project/About%20Us/about.html">About Us </a></li>
              <li class="nav-items"><a href="#">Help</a></li>
            </ul>
          </div>
        
       
      </nav>
      <div class="viewbackground">
          <div class="cards">

<?php 

//PHP FOR filtering--


if(isset($_GET['search'])){
    
    $filtervalues = $_GET['search'];
    $query = "SELECT * FROM owner_page WHERE city like'%$filtervalues%' ";
    $query_run = mysqli_query($con, $query) or die("Query Failed"); 
    
    if(mysqli_num_rows($query_run) > 0){
        foreach($query_run as $items){
            ?>
            
            <div id="card-1" class="allcard">
                        <a href="Inside_property\inside_property.php?image=<?php echo $items['property_images']; ?>" >
                        <img src="Login Page/<?php echo $items['property_images']; ?>" width="240" height="180" alt="Img">
                        </a>
                        <h3 class="h1" style="font-size: 25px;
                        font-weight: 600; font-family: 'Montserrat';"><?php echo $items['price']; ?> <span class="month">/ month</span> 
                        <!-- <button class="cardsbtn">2 BHK</button></h3> -->
                        <p class="p1"><?php echo $items['society_name']; ?></p>     
                    </div>


            <?php

        }
    }
    else
    {
        echo "No record found";
        
    }

}
mysqli_close($con);

?>
</div>
</div>
    <script>
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
        const navbarLinks = document.getElementsByClassName('navbar-links')[0]

        toggleButton.addEventListener('click', () => {
        navbarLinks.classList.toggle('active')
        } )

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
