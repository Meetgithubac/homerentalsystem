<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Page</title>
    <link rel="stylesheet" href="CSS\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php require 'Database\navbar.php' ?>
        <div class="sidebar">
        <nav>
            <ul>
                <li><a href="owner.html"><img src="home.png" alt=""> Home</a></li>
                <li><a href="Pages\addproperty.php"><img src="addproperty.png" alt=""> Add Property</a></li>
                <li><a href="Pages\editproperty.php"><img src="edit.png" alt=""> Edit Property</a></li>
                <li><a href="Pages\viewproperty.php"><img src="view.png" alt=""> View Property</a></li>
                <li><a href="Pages\logout.php"><img src="logout.png" alt=""> Logout</a></li>
            </ul>
        </nav>
        </div>
        <div class="viewbackground">
            <div class="card">
                <h1>Your Property Card</h1>
                <div id="card-1" class="allcard">
                    <img src="1.jpg" alt="Img">
                    <h3 class="h1">$200 <span class="month">/ month</span> 
                    <!-- <button class="cardsbtn">2 BHK</button></h3> -->
                    <p class="p1">Sundaram Apartment</p>
                </div>
            </div>

        </div>
    </div>
</body>
</html>