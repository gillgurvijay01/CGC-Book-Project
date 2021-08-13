<?php
    include 'db-connect.php';
    $SELECT_QUERY="SELECT up.pid,p.cost  FROM user_product_ordered up INNER JOIN product p ON p.pid=up.pid";
     $SELECT_QUERY_GET=mysqli_query($con,$SELECT_QUERY)
     or die(mysqli_error($con));
     $sum=0;
     while ($row = mysqli_fetch_array($SELECT_QUERY_GET)){
        $sum = $sum + $row['cost'];
    }
    echo $sum;
 ?>