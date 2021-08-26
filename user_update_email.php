<?php
include 'dbcon.php';
include 'session.php';
$new_email=$_POST['email_new'];
$update="UPDATE user SET email = '$new_email' WHERE id = '$login_session';";
$query=mysqli_query($con,$update);
header("location:logout_user.php");
?>