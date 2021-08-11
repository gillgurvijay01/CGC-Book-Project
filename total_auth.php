<?php
    include 'db_con.php';
    $query="SELECT * FROM authorise";
    $quer=mysqli_query($con,$query);
    $no_of_rows=mysqli_num_rows($quer);
    echo $no_of_rows;

?>