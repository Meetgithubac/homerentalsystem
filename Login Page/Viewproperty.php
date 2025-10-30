
 <!-- View Property That user has been added. -->
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
    <link rel="stylesheet" href="viewproperty.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="margin-top: 8rem;">
    <?php require 'Database/navbar.php' ?>
    <?php
    // include db connection
    include 'Database\owner_data.php';

        // Store Session Variables to normal Variables for insert query.
            $email = $_SESSION['email'];

        // insert data
        //Fire The insert Query.

        $sql=  "SELECT * from owner_page where email ='$email'";
        $result1 = mysqli_query($con,$sql) or die("Query Failed");
                while ($row = mysqli_fetch_array($result1))
                {
                    $owner_name = $row['owner_name'];
                    $society_name = $row['society_name'];
                    $caste = $row['caste'];
                    $address = $row['address'];
                    $price = $row['price'];
                    $sq_ft = $row['sq_ft'];
                    $bhk = $row['bhk'];
                    $city = $row['city'];
                    $id = $row['id'];

                    $_SESSION['id'] = $id;

                    $property_image = $row['property_images'];
                    $property_image1 = $row['property_images1'];
                    $property_image2 = $row['property_images2'];
                    $property_image3 = $row['property_images3'];
                    $property_image4 = $row['property_images4'];
                    $property_image5 = $row['property_images5'];

                    $gasbill_image = $row['gas_bill'];

                ?>  
                <!-- <div class="alert alert-success alert-dismissible fade show" role="alert" style=" margin-top: 5rem;
    width: 94.5vw; margin-left: 2rem;">
                        <strong>Success!</strong> Your response has been submitted successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> -->

            <main class="viewproperty">
                    <section class="table_header">
                        <h2>Your Property</h2>
                    </section>
                    <section class="table_body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" id="main_th">ID</th>
                                <th scope="col" id="main_th">Owner Name</th>
                                <th scope="col" id="main_th">Society Name</th>
                                <th scope="col" id="main_th">Caste</th>
                                <th scope="col" id="main_th">Address</th>
                                <th scope="col" id="main_th">Price</th>
                                <th scope="col" id="main_th">Sq_ft</th>
                                <th scope="col" id="main_th">BHK</th>
                                <th scope="col" id="main_th">Area</th>
                                <th scope="col" id="main_th" colspan=6>Property Images</th>
                                <th scope="col" id="main_th">Gasbill Image</th>
                                <th scope="col" id="main_th" colspan=2>Operations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td id="info"><?php echo "$id"; ?></td>
                                <td id="info"><?php echo "$owner_name"; ?></th>
                                <td id="info"><?php echo "$society_name"; ?></td>
                                <td id="info"><?php echo "$caste"; ?></td>
                                <td id="info"><?php echo "$address"; ?></td>
                                <td id="info"><?php echo "$price"; ?></td>
                                <td id="info"><?php echo "$sq_ft"; ?></td>
                                <td id="info"><?php echo "$bhk"; ?></td>
                                <td id="info"><?php echo "$city"; ?></td>
                                <td id="view_img"><img src="<?php echo $property_image; ?>" height="200" width = "250" alt="Img " style="border-radius: 10px;"></td>
                                <td id="view_img"><img src="<?php echo $property_image1; ?>" height="200" width = "250" alt="Img " style="border-radius: 10px;"></td>
                                <td id="view_img"><img src="<?php echo $property_image2; ?>" height="200" width = "250" alt="Img " style="border-radius: 10px;"></td>
                                <td id="view_img"><img src="<?php echo $property_image3; ?>" height="200" width = "250" alt="Img " style="border-radius: 10px;"></td>
                                <td id="view_img"><img src="<?php echo $property_image4; ?>" height="200" width = "250" alt="Img " style="border-radius: 10px;"></td>
                                <td id="view_img"><img src="<?php echo $property_image5; ?>" height="200" width = "250" alt="Img " style="border-radius: 10px;"></td>

                                <!-- only problem in path of uploadImage/Gasbill/filename. -->
                                <td id="view_img"><img src="<?php echo "$gasbill_image"; ?>" height="200" width = "200"  alt="Img"></td>

                                <td id="view_img"><a href="editproperty.php?id=<?php echo "$id"; ?>&bhk=<?php echo $bhk;?>&area=<?php echo $row['city'];?>"  data-toggle="tooltip" data-placement="top" title="Update" name="ancor" ><img src="edit.png" height="40" width="40"></a></td>
                                <td id="view_img"><a href="deleteproperty.php?id=<?php echo "$id"; ?>" data-toggle="tooltip" data-placement="top" title="Delete" name="ancor" ><img src="delete.png" height="40" width="40"></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                
        </section>
                    

                    
                <?php

                }
                    mysqli_close($con);

                   
                ?>

<?php
    
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>


</html>

<!-- Done1 -->


