<?php
$con=mysqli_connect( "localhost",  "gurvijay" , "password" , "bookProject") or
die(mysqli_error($con));
$uname=$_POST['username'];
$password=$_POST['password'];
if (($uname == 'admin') && ($password == 'password')){
    $timestamp = date("Y-m-d H:i:s ");
    $admin_track_query="INSERT INTO authorise ( user , clock_time ) VALUES ('$uname','$timestamp')";
    $submit_track = mysqli_query($con,$admin_track_query)
    or die(mysqli_error($con));
    header('Location:admin-index.php');}
else    {
    echo "You are not authorized user <br>";
    echo  "Try Again";
    $timestamp = date("Y-m-d H:i:s ");
    $unauthorize="INSERT INTO unauthorized_admin_track ( user , password , time ) VALUES ('$uname','$password','$timestamp')";
    $submit=mysqli_query($con,$unauthorize)
    or die(mysqli_error($con));

}


?>