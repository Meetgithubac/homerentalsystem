<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Page</title>
    <link rel="stylesheet" href="CSS\style.css">
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
        <div class="right">
        <div class="information">
            <div class="handpic">
                <h1>Thank you! Visit Again <img src="hands.png" alt=""></h1>
            </div>
        </div>
    </div>
</body>
</html>