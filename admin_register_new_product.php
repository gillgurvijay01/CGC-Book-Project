<?php

include 'db_con.php';

// execute only if post request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // default message
    $msg = "Image upload failed.";

    // check upload
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {

        // check if upload is an image
        if (getimagesize($_FILES["image"]["tmp_name"]) !== false) {

            // get image extension
            $extension = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

            $filename = uniqid() . '.' . $extension;
            $folder = "media/" . $filename;
            // $folder = getcwd().DIRECTORY_SEPARATOR."media/".$filename;
            // move uploaded image
            if (move_uploaded_file($_FILES["image"]['tmp_name'], $folder)) {

                // only after successfully upload, write new row into the database

                // !! always treat incoming data as insecure and verify it!!
                $name = mysqli_real_escape_string($con, $_POST['name']);
                $description = mysqli_real_escape_string($con, $_POST['description']);
                $cost = mysqli_real_escape_string($con, $_POST['cost']);
                $timestamp = date("Y-m-d H:i:s ");

                $sql = "INSERT INTO product (name, detail_desc, cost, added_date, file_img_link) VALUES ('$name', '$description', '$cost', '$timestamp', '$filename')" or die(mysqli_error(($con)));

                if (mysqli_query($con, $sql)) {
                    // overwrite default message
                    $msg = "Image uploaded successfully to ".$folder;
                }
            } else {
                $msg = "Failed to move uploaded file.";
            }            
        } else {
            $msg = "Failed to get image size.";
        } 
    }
    // echo error_get_last();
    // echo $msg;
    // echo mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    print_r(error_get_last());
}