<?php
$con=mysqli_connect( "localhost",  "gurvijay" , "password" , "bookProject") or
die(mysqli_error($con));
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);


?>