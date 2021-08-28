<?php
include 'db_con.php';
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password-new'];
$password2=$_POST['password-confirm'];
$password=md5($password);
$password2=md5($password2);
$check_user="SELECT mobile FROM user WHERE email='$email'";
$get_user_mobile=mysqli_query($con,$check_user);
$get_mobile=mysqli_fetch_array($get_user_mobile);
// echo $mobile.'<br>'.$get_mobile.'<br>';
// var_dump($get_mobile);
// echo '<br>';
// var_dump($mobile);
if($get_mobile[0]==$mobile){
    if($password==$password2){
        $update_query="UPDATE user SET password= '$password' WHERE mobile = '$mobile'";
        $query=mysqli_query($con,$update_query) or die(mysqli_error($con));
        header("location:index.php");
    }
    else
        echo 'User Found.Password and Confirm password did not match. Try Again';
}
else{
    echo 'USER NOT FOUND';
}


?>