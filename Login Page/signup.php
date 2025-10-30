<?php
 $showAlert = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'Database\dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $whatno = $_POST["whatno"];
    // $exists = false;
    $existSql = "SELECT * FROM `project` WHERE username = '$username'";
    $existSql2 = "SELECT * FROM `project` WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $result2 = mysqli_query($conn, $existSql2);
    $numExistsRows = mysqli_num_rows($result);
    $numExistsRows2 = mysqli_num_rows($result2);

        if($numExistsRows > 0){
            // $exists = true;
            $showError = "Username already exists";
        }
        else if($numExistsRows2 > 0){
            $showError = "Email already exists";
        }
        else{
            // $exists = false;
            if(($password == $cpassword)){
                $hash = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO `project` (`username`, `email`, `password`, `whatno`) VALUES ('$username', '$email', '$hash', '$whatno')";
                $result = mysqli_query($conn, $sql) or die("Query Failed");
                if($result){
                    $showAlert = true;
                }
            }
            else{
                $showError = "Password do not match";
            }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS\login_system.css">
</head>
<body style="margin-top: 4rem;">
    <?php require 'Database/navbar.php' ?>
    <!-- Alerts  -->
    <?php
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style=" margin-top: 6rem;
            width: 94.5vw; margin-bottom: -2rem; margin-left: 1.5rem;">
            <strong>Success!</strong> Your account has been created and you can now login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style=" margin-top: 6rem;
            width: 94.5vw; margin-bottom: -2rem; margin-left: 1.5rem;">
            <strong>Error! </strong>' .$showError.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        ?>

        <div class="form-background" style="background: url('https://wallpaperaccess.com/full/446984.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 43rem;">
            <form action="signup.php" method="post" class="form-input text-center">
                <ul>
                    <div class="container">
                        <h2 class="text-center">Sign Up to our Website</h2>
                    </div><hr id="line">
                    <div class="signup_content">
                        <input type="text" placeholder="Username" name="username" id="username" class="user-input">
                        <input type="email" name="email" id="email" placeholder="Email" class="user-input">
                        <input type="password" name="password" id="password" placeholder="Password" class="user-input">
                        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" class="user-input">
                        <input type="tel" name="whatno" id="wno" placeholder="Whatsapp Number" class="user-input">
                        <button class="button-input">Sign Up</button>
                    </div>
                </ul>
            </form>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<!-- Done -->