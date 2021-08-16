<?php
    include 'db_con.php';
    $pid = $_GET['pid']; // get id through query string
    // echo $pid;
    $del_query="DELETE from product where pid = $pid";
    $del_submit = mysqli_query($con,$del_query) or
    die(mysqli_error($con)); // delete query
    // echo $var_dump($del_submit);

    header("Location:admin-all-products.php");
?>