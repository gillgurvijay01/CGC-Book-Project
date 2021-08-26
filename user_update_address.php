<?php
include 'dbcon.php';
include 'session.php';
$address_new=$_POST['address_new'];
$address_new=mysqli_real_escape_string($con,$address_new);
$update="UPDATE user SET address = '$address_new' WHERE id = '$login_session';";
$query=mysqli_query($con,$update);
header("location:logout_user.php");
?>