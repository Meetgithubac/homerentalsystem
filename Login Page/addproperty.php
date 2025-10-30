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
    <link rel="stylesheet" href="style_welcome.css">
    <!-- <link rel="stylesheet" href="CSS\style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php require 'Database/navbar.php' ?>

    <div class="container" style="margin-top: 8rem;">
    <form action="insertproperty.php" style="display: flex;
    flex-direction: column;
    width: 92%;
    margin: auto;" method="post" enctype="multipart/form-data">
    <h2 id="heading">Add Property</h2>
                <input type="hidden" name="email">
                <input type="text" name = "owner_name" placeholder="Enter the owner name" id="owner_name">
                <input type="text" name = "society_name" placeholder="Enter the society/apartment name" id="society_name">
                <input type="text" name = "caste" placeholder="Enter your caste" id="caste">
                <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter the address"></textarea>
                <input type="number" name="price" placeholder="Enter rent per month" id="price">
                <input type="number" name="sq_ft" placeholder="Enter Sq.ft" id="sq_ft">
                <select name="bhk" id="bhk">
                    <option value="bhk">Choose BHK</option>
                    <option value="1 BHK">1 BHK</option>
                    <option value="2 BHK">2 BHK</option>
                    <option value="3 BHK">3 BHK</option>
                    <option value="4 BHK">4 BHK</option>
                    <option value="5 BHK">5 BHK</option>
                </select>
        
                <select name="city" id="city">
                    <option value="city">Choose area</option>
                    <option value="Bapunagar">Bapunagar</option>
                    <option value="Chankheda">Chankheda</option>
                    <option value="Geeta Mandir">Geeta Mandir</option>
                    <option value="Gota">Gota</option>
                    <option value="Ghodasar">Ghodasar</option>
                    <option value="Iskcon">Iskcon</option>
                    <option value="Kalupur">Kalupur</option>
                    <option value="Soni Ni Chali">Soni Ni Chali</option>
                    <option value="Sarkhej">Sarkhej</option>
                    <option value="Narol">Narol</option>
                    <option value="Naroda">Naroda</option>
                    <option value="Nehrunagar">Nehrunagar</option>
                    <option value="Nikol">Nikol</option>
                    <option value="Satellite">Satellite</option>
                    <option value="Sola">Sola</option>
                    <option value="Shivranjni">Shivranjni</option>
                    <option value="Thaltej">Thaltej</option>
                    <option value="Vastral">Vastral</option>
                </select>
                <label for="text">Add Property Main Photo Here: <input type="file" name="property_photo" id="photo" multiple></label>
                <label for="text">Add Property Photos-1: <input type="file" name="property_photo1" id="photo" multiple></label>
                <label for="text">Add Property Photos-2: <input type="file" name="property_photo2" id="photo" multiple></label>
                <label for="text">Add Property Photos-3: <input type="file" name="property_photo3" id="photo" multiple></label>
                <label for="text">Add Property Photos-4: <input type="file" name="property_photo4" id="photo" multiple></label>
                <label for="text">Add Property Photos-5: <input type="file" name="property_photo5" id="photo" multiple></label>
                <label for="text">Add Gas Bill Picture: <input type="file" name="gasbill_photo" id="photo"></label>
                <label for="text"><strong>NOTE:</strong> The <strong>Main Photo</strong> is display in home page as card <br></lable>

                <div class="btn">
                    <button name="upload">Submit</button>
                </div>
                            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<!-- Done -->
