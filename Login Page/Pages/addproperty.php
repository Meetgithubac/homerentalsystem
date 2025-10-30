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
<?php require 'Database/navbar.php' ?>
    <div class="container">
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
            <div class="contactform">
                <h1>Add Property Details</h1>
                <form action="#">
                    <input type="text" name = "name" placeholder="Enter the house name" id="name">
                    <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter the address"></textarea>
                    <input type="number" name="price" placeholder="Enter rent per month" id="price">
                    <select name="bhk" id="bhk">
                        <option value="bhk">Choose BHK</option>
                        <option value="1-bhk">1 BHK</option>
                        <option value="2-bhk">2 BHK</option>
                        <option value="3-bhk">3 BHK</option>
                        <option value="4-bhk">4 BHK</option>
                        <option value="5-bhk">5 BHK</option>
                    </select>

                    <select name="city" id="city">
                    
                        <option value="city">Choose area</option>
                        <option value="sola">Sola</option>
                        <option value="gota">Gota</option>
                        <option value="Bapunagar">Bapunagar</option>
                    </select>
                    <label for="text">Add Property Photos: <input type="file" name="photo" id="photo" multiple></label>
                    <label for="text">Add Gas Bill Picture: <input type="file" name="photo" id="photo"></label>
                    
                </form>
                <button>Submit</button>
                <button>Reset</button>

            </div>
        </div>
    </div>
</body>
</html>