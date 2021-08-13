<?php
include 'db_con.php';
    $name=$_POST['name'];
    $desc=$_POST['description'];
    $cost=$_POST['cost'];
    if (isset($_POST['image'])) {
  
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];    
            $folder = "img/".$filename;
              
            // Get all the submitted data from the form
            $sql = "INSERT INTO product (name, detail_desc, cost, file_img_link) VALUES ('$name',$desc,'$cost','$filename')";
      
            // Execute query
            $submit=mysqli_query($con, $sql) 
            or die(mysqli_error($con));
              
            // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder))  {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
          }
      }
    ?>