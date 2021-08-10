<?php
$con=mysqli_connect( "localhost",  "gurvijay" , "password" , "bookProject") or
die(mysqli_error($con));
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password-new'];
$password2=$_POST['password-confirm'];
$password=md5($password);
$password2=md5($password2);


?>