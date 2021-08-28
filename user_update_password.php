<?php
include 'dbcon.php';
include 'session.php';
$password_new=$_POST['password_new'];
$password_new_confirmed=$_POST['confirm_new'];
$password_new=md5($password_new);
$password_new_confirmed=md5($password_new_confirmed);
if($password_new==$password_new_confirmed){
$update="UPDATE user SET password= '$password_new' WHERE id = '$login_session'";
$query=mysqli_query($con,$update);
header("location:logout_user.php");}
else{
    header('location:user_settings.php');
}
?>