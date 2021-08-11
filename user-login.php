<?php
include 'db_con.php';
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);


?>