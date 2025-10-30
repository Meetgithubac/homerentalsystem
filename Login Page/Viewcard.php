
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php require 'Database/navbar.php';
        include 'Database/owner_data.php';
        // $id = $_GET['id'];
        // $owner_name = $_SESSION['owner_name'];
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM owner_page WHERE email='$email' ";
        $result = mysqli_query($con,$sql) or die("Query Failed");
        $data = mysqli_num_rows($result)>0 ;

        if($data)
        {
            while ($row = mysqli_fetch_array($result) ) {
            ?>
                <div class="viewbackground">
                    <div class="cards">
                    <h1 id="your_property">Your Property Card:</h1>
                        <div id="card-1" class="allcard">
                            <img src="<?php echo $row['property_images']; ?>" width="240" height="180" alt="Img">
                            <h3 class="h1" style="font-size: 25px;
                            font-weight: 600;"><?php echo $row['price']; ?> <span class="month">/ month</span> </h3>
                            <!-- <button class="cardsbtn">2 BHK</button></h3> -->
                            <p class="p1"><?php echo $row['society_name']; ?></p>
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


    </body>
</html>
<!-- Done -->
<?php

//View Card PHP



?>