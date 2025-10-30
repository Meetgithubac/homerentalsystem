<?php
 $login = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    
    include 'Database\dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    // $sql = "Select * from project where email ='$email' AND password = '$password'";
    $sql = "SELECT * from project where email ='$email'";
    $result = mysqli_query($conn, $sql)or die("Query Failed");
    $num = mysqli_num_rows($result);
    if($num == 1){
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;

                header("location: welcome.php");
            }
            else{
                $showError = "Invalid Credentials";
            }
        
        }
        

    }
    else{
        $showError = "Invalid Credentials";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="CSS\login_system.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="margin-top: 4rem;">
    <?php require 'Database/navbar.php' ?>
    <!-- Alerts  -->

        <div class="form-background" style="background: url('https://wallpaperaccess.com/full/446984.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 43rem;">
            <form action="login.php" method="post" class="form-input text-center">
                <ul>
                    <?php
                        if($login){
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 6rem;
                            width: 94.5vw; margin-bottom: -2rem;">
                            <strong>Success!</strong> You are logged in!.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                        }
                        if($showError){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 6rem;
                            width: 94.5vw; margin-bottom: -2rem;">
                            <strong>Error! </strong>' .$showError.'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        }
                    ?>
                    <div class="container">
                        <h2 class="text-center">Login to our Website</h2>
                    </div><hr id= "line">
                    <div class="login_content"> 
                        <input type="email" name="email" id="email" placeholder="Email" class="user-input">
                        <input type="password" name="password" id="password" placeholder="Password" class="user-input">
                        <button class="button-input">Login</button>
                    </div>
                </ul>
            </form>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<!-- Done -->