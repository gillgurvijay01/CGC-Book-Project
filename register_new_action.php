<?php
    $con=mysqli_connect( "localhost",  "gurvijay" , "password" , "bookProject") or
    die(mysqli_error($con));
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_registration_query="INSERT INTO user ( first_name , last_name ,address , mobile , email , password) VALUES ('$first_name','$last_name','$address', '$mobile', '$email', '$password')";
    $user_registration_submit=mysqli_query($con,$user_registration_query) or
    die(mysqli_error($con));
        echo "User entered";
    sleep(5);
    echo "Go to Login after Redirecting";
    sleep(5);
    header("index.php")

?>