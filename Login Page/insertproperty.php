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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php require 'Database/navbar.php' ?>
    <?php
    // include db connection
    include 'Database\owner_data.php';

        // if(isset($_POST['upload'])){
            $_SESSION['owner_name'] = $_POST['owner_name'];                 /*Storing */ 
            $_SESSION['society_name'] = $_POST['society_name'];             /*The*/
            $_SESSION['caste'] = $_POST['caste'];                           /*Values*/                    
            $_SESSION['address'] = $_POST['address'];                       /*In*/ 
            $_SESSION['price'] = $_POST['price'];                           /*Session*/ 
            $_SESSION['sq_ft'] = $_POST['sq_ft'];
            $_SESSION['bhk'] = $_POST['bhk'];
            $_SESSION['city'] = $_POST['city'];
            $_SESSION['property_image'] = $_FILES['property_photo'];        /*  Retriving */ 
            $_SESSION['property_image1'] = $_FILES['property_photo1'];      /*    All */
            $_SESSION['property_image2'] = $_FILES['property_photo2'];      /*    The */
            $_SESSION['property_image3'] = $_FILES['property_photo3'];      /*    Property */
            $_SESSION['property_image4'] = $_FILES['property_photo4'];      /*    Images  */
            $_SESSION['property_image5'] = $_FILES['property_photo5'];

            $_SESSION['gasbill_image'] = $_FILES['gasbill_photo'];          //Retrivng the Gas bill.


            $img_loc = $_FILES['property_photo']['tmp_name'];   //Store The temp location of image.
            $img_name = $_FILES['property_photo']['name'];      //Get The image name.

            $img_loc1 = $_FILES['property_photo1']['tmp_name']; //Store The temp location of image.
            $img_name1 = $_FILES['property_photo1']['name'];    //Get The image name.

            $img_loc2 = $_FILES['property_photo2']['tmp_name'];   //Store The temp location of image.    
            $img_name2 = $_FILES['property_photo2']['name'];      //Get The image name.  

            $img_loc3 = $_FILES['property_photo3']['tmp_name'];   //Store The temp location of image.
            $img_name3 = $_FILES['property_photo3']['name'];      //Get The image name.  

            $img_loc4 = $_FILES['property_photo4']['tmp_name'];   //Store The temp location of image.
            $img_name4 = $_FILES['property_photo4']['name'];      //Get The image name.  

            $img_loc5 = $_FILES['property_photo5']['tmp_name'];   //Store The temp location of image.
            $img_name5 = $_FILES['property_photo5']['name'];      //Get The image name.  


            $gasbill_loc = $_FILES['gasbill_photo']['tmp_name'];      //Store The temp location of gasbill.
            $gasbill_name = $_FILES['gasbill_photo']['name'];         //Get The gasbill name.  
    

            $propertypicfile = 'UploadImage/'.$img_name;        //Create The Folder and Store the image to folder.

            $propertypicfile1 = 'UploadImage/'.$img_name1;      /* Create The */
            $propertypicfile2 = 'UploadImage/'.$img_name2;      /* Folder and */
            $propertypicfile3 = 'UploadImage/'.$img_name3;      /* Store the  */
            $propertypicfile4 = 'UploadImage/'.$img_name4;      /* image to   */
            $propertypicfile5 = 'UploadImage/'.$img_name5;      /* folder     */

            $gasbillfile = 'UploadImage/Gasbill/'.$gasbill_name;
    
            move_uploaded_file($img_loc,$propertypicfile);             
            $_SESSION['propertypicfile'] = $propertypicfile;    //Storing the image in session.

            move_uploaded_file($img_loc1,$propertypicfile1);         /* Move  */     
            $_SESSION['propertypicfile1'] = $propertypicfile1;      /* The */
            move_uploaded_file($img_loc2,$propertypicfile2);         /* Data */    
            $_SESSION['propertypicfile2'] = $propertypicfile2;      /* To */
            move_uploaded_file($img_loc3,$propertypicfile3);         /* The */ 
            $_SESSION['propertypicfile3'] = $propertypicfile3;      /* Folder. */
            move_uploaded_file($img_loc4,$propertypicfile4);             
            $_SESSION['propertypicfile4'] = $propertypicfile4;
            move_uploaded_file($img_loc5,$propertypicfile5);             
            $_SESSION['propertypicfile5'] = $propertypicfile5;


            move_uploaded_file($gasbill_loc,$gasbillfile);
            $_SESSION['gasbillfile'] = $gasbillfile;            //Storing the image in session.
    
            // Store Session Variables to normal Variables for insert query.
            
            $email = $_SESSION['email'];
            $owner_name = $_SESSION['owner_name'];
            $society_name = $_SESSION['society_name'];
            $caste = $_SESSION['caste'];
            $address = $_SESSION['address'];
            $price = $_SESSION['price'];
            $sq_ft = $_SESSION['sq_ft'];
            $bhk = $_SESSION['bhk'];
            $city = $_SESSION['city'];
            // $propertypicfile = $_SESSION['propertypicfile'];
            // $propertypicfile1 = $_SESSION['propertypicfile1'];
            // $propertypicfile2 = $_SESSION['propertypicfile2'];
            // $propertypicfile3 = $_SESSION['propertypicfile3'];
            // $propertypicfile4 = $_SESSION['propertypicfile4'];
            // $propertypicfile5 = $_SESSION['propertypicfile5'];

            // $gasbillfile = $_SESSION['gasbillfile'];
            
    
            // insert data
            //Fire The insert Query.
            if(isset($_POST['upload'])){    
                
                $sql=  "INSERT INTO `owner_page`(`email`, `owner_name`, `society_name`, `caste`, `address`, `price`, `sq_ft`, `bhk`, `city`, `property_images`, `property_images1`, `property_images2`, `property_images3`, `property_images4`, `property_images5`, `gas_bill`) VALUES ('$email','$owner_name','$society_name','$caste','$address','$price','$sq_ft','$bhk','$city','$propertypicfile','$propertypicfile1','$propertypicfile2','$propertypicfile3','$propertypicfile4','$propertypicfile5','$gasbillfile')";
        
                $data = mysqli_query($con,$sql) or die("Query Failed");
                if($data)
                {
                    echo "Data inserted Successfully ";
                }
                else{
                    echo "Not Inserted ";
                }
        
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your response has been submitted successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        
                    
                    
                    // }
                    // header('location:editproperty.php');
            }    
                ?>
    
                <!-- <table class="table" border = "2">
                            <thead>
                            <tr>
                                <th scope="col">Owner Name</th>
                                <th scope="col">Society Name</th>
                                <th scope="col">Caste</th>
                                <th scope="col">Address</th>
                                <th scope="col">Price</th>
                                <th scope="col">Sq_ft</th>
                                <th scope="col">BHK</th>
                                <th scope="col">Area</th>
                                <th scope="col">Property Images</th>
                                <th scope="col">Gasbill Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"><?php //echo "$owner_name"; ?></th>
                                <td><?php //echo "$society_name"; ?></td>
                                <td><?php //echo "$caste"; ?></td>
                                <td><?php //echo "$address"; ?></td>
                                <td><?php //echo "$price"; ?></td>
                                <td><?php //echo "$sq_ft"; ?></td>
                                <td><?php //echo "$bhk"; ?></td>
                                <td><?php // echo "$city"; ?></td>
                                <td><img src="<?php //echo "$propertypicfile"; ?>" height="200" width = "200" alt="Img"></td>
                                <td><img src="<?php //echo "$gasbillfile"; ?>" height="200" width = "200"  alt="Img"></td>
                            </tr>
                            </tbody>
                </table> -->
    
    
    <?php
        //Script For Alert Message.
        echo '  <script>
                    alert("Data Inserted SuccessFully")
                </script>  ';
        mysqli_close($con);
    ?>
    
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    </body>
    
    </html>

    <!-- DONE -->