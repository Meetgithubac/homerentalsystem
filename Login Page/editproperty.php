
<!-- Editting the Property  -->
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
<?php require 'Database/navbar.php';
        include 'Database/owner_data.php';
    ?>

    <div class="container">
   
    <form action="" style="display: flex;
    flex-direction: column;
    width: 92%;
    margin: auto;" method="post" enctype="multipart/form-data">
    <!-- PHP Code -->
        <?php

            $bhk = $_GET['bhk'];
            $id = $_GET['id'];
            $city = $_GET['area'];

            $query = "SELECT * FROM `owner_page` WHERE id='$id'";
            $result = mysqli_query($con,$query)  or die("Query Failed");
            $row = mysqli_fetch_array($result);


        ?>
       
        <h2 id="heading">EDIT PROPERTY</h2>
                <input type="text" name = "owner_name" value = "<?php  echo $row['owner_name'] ; ?>" placeholder="Enter the owner name" id="owner_name">
                <input type="text" name = "society_name" value = "<?php  echo $row['society_name'] ; ?>" placeholder="Enter the society/apartment name" id="society_name">
                <input type="text" name = "caste" value = "<?php  echo $row['caste'] ; ?>"  placeholder="Enter your caste" id="caste">
                <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter the address"><?php  echo $row['address'] ; ?> </textarea>
                <input type="number" name="price" value = "<?php  echo $row['price'] ; ?>"  placeholder="Enter rent per month" id="price">
                <input type="number" name="sq_ft" value = "<?php  echo $row['sq_ft'] ; ?>"  placeholder="Enter Sq.ft" id="sq_ft">
                 <?php

                        $selection = array('1 BHK','2 BHK','3 BHK','4 BHK','5 BHK');
                        echo '<select name="bhk" id="bhk"> ';
                                // <option value="0"> Please Select Option </option>
                                
                            foreach ($selection as $selection) {
                                $selected = ($bhk == $selection) ? "selected" : "";
                                echo '<option '.$selected.' value="'.$selection.' ">'.$selection.'</option>'; 
                            }
                        echo '</select>';

                    ?>
                <!-- <select name="bhk" id="bhk">
                    <option value="bhk">Choose BHK</option>
                    <option value="1-bhk">1 BHK</option>
                    <option value="2-bhk">2 BHK</option>
                    <option value="3-bhk">3 BHK</option>
                    <option value="4-bhk">4 BHK</option>
                    <option value="5-bhk">5 BHK</option>
                </select> -->
                
                  <?php

                        $selection2 = array('Sola','Gota','Bapunagar');
                        echo '<select name="city" id="city">';
                            // <option value="0"> Please Select Option </option>
                            
                        foreach ($selection2 as $selection2) {
                            $selected = ($city == $selection2) ? "selected" : "";
                            echo '<option '.$selected.' value="'.$selection2.' ">'.$selection2.'</option>'; 
                        }
                        echo '</select>';

                    ?>

                <!-- <select name="city" id="city">
                            
                    <option value="city">Choose area</option>
                    <option value="Sola">Sola</option>
                    <option value="Gota">Gota</option>
                    <option value="Bapunagar">Bapunagar</option>
                </select> -->

                <label for="text">Add Property Main Photo Here: <input type="file" name="property_photo" id="photo" multiple></label>
                <label for="text">Add Property Photos-1: <input type="file" name="property_photo1" id="photo" multiple></label>
                <label for="text">Add Property Photos-2: <input type="file" name="property_photo2" id="photo" multiple></label>
                <label for="text">Add Property Photos-3: <input type="file" name="property_photo3" id="photo" multiple></label>
                <label for="text">Add Property Photos-4: <input type="file" name="property_photo4" id="photo" multiple></label>
                <label for="text">Add Property Photos-5: <input type="file" name="property_photo5" id="photo" multiple></label>
                <label for="text">Add Gas Bill Picture: <input type="file" name="gasbill_photo" id="photo"></label>
                <label for="text"><strong>NOTE:</strong> The <strong>Main Photo</strong> is display in home page as card <br></lable>

                <div class="btn">
                    <button name="UPDATE">UPDATE</button>
                </div>
                            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<!-- Done -->
<!-- Code For Update Data -->

<?php

        //edit property in php 

        // Retriving The Session values 
        if (isset($_POST['UPDATE'])){
        $id = $_GET['id'];

            $_SESSION['owner_name'] = $_POST['owner_name'];                 /*Storing */ 
            $_SESSION['society_name'] = $_POST['society_name'];             /*The*/
            $_SESSION['caste'] = $_POST['caste'];                           /*Values*/                    
            $_SESSION['address'] = $_POST['address'];                       /*In*/ 
            $_SESSION['price'] = $_POST['price'];                           /*Session*/ 
            $_SESSION['sq_ft'] = $_POST['sq_ft'];
            $_SESSION['bhk'] = $_POST['bhk'];
            $_SESSION['city'] = $_POST['city'];


            //This Code is for Updating the Images To database.
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
            $_SESSION['gasbillfile'] = $gasbillfile;   

            // Retrived.

            // Store Session Variables to normal Variables for insert query.
    
             $owner_name = $_SESSION['owner_name'];
             $society_name = $_SESSION['society_name'];
             $caste = $_SESSION['caste'];
             $address = $_SESSION['address'];
             $price = $_SESSION['price'];
             $sq_ft = $_SESSION['sq_ft'];
             $bhk = $_SESSION['bhk'];
             $city = $_SESSION['city'];
             $propertypicfile = $_SESSION['propertypicfile'];
             $propertypicfile1 = $_SESSION['propertypicfile1'];
             $propertypicfile2 = $_SESSION['propertypicfile2'];
             $propertypicfile3 = $_SESSION['propertypicfile3'];
             $propertypicfile4 = $_SESSION['propertypicfile4'];
             $propertypicfile5 = $_SESSION['propertypicfile5'];
 
             $gasbillfile = $_SESSION['gasbillfile'];

            //Update Data.
            //Fire the update Query.

            $sql1 = "UPDATE `owner_page` SET `id`='$id',`owner_name`='$owner_name',`society_name`='$society_name',`caste`='$caste',`address`='$address',`price`='$price',`sq_ft`='$sq_ft',`bhk`='$bhk',`city`='$city',`property_images`='$propertypicfile',`property_images1`='$propertypicfile1',`property_images2`='$propertypicfile2',`property_images3`='$propertypicfile3',`property_images4`='$propertypicfile4',`property_images5`='$propertypicfile5',`gas_bill`='$gasbillfile' WHERE `id`='$id' " ;
            $data = mysqli_query($con,$sql1) or die("Query failed");     //Error found
            if($data){
                echo "Data UPDATED Succesfully";
            }
            else{
                echo "Data not UPDATED";
            }
            //Script For Alert Message
            echo '  <script>
                    alert("Data Updated SuccessFully")
                </script>  ';
            mysqli_close($con);
        }
        else{
            echo "sorry error occured";
        }

          
?>

<!-- DONE -->