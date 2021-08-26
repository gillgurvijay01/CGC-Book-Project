<?php
include 'dbcon.php';
include 'session.php';
$fname_new=$_POST['fname_new'];
$lname_new=$_POST['lname_new'];
$update="UPDATE user SET first_name = '$fname_new', last_name='$lname_new' WHERE id = '$login_session';";
$query=mysqli_query($con,$update);
header("location:logout_user.php");
?>