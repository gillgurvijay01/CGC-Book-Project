<?php
 include 'session.php';
 ?>
 <?php
     $SELECT_QUERY="SELECT p.name,p.cost,up.date_time  FROM user_product_ordered up INNER JOIN product p ON p.pid=up.pid WHERE up.uid=$login_session";
     $SELECT_QUERY_GET=mysqli_query($con,$SELECT_QUERY)
     or die(mysqli_error($con));
     $sn=1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Orders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</head>
    <body>
        <?php include 'user_header.php';?>
        <div class="main" style="margin-top:10vh;">
        <center>
            <h3>Your All products</h3>
            <h6>You can cencel the product ordered only whithin 12 hrs of ordering</h6>
        </center>

        <table class="table table-striped  table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Cost</th>
      <th scope="col">Date Time of Order</th>
    </tr>
  </thead>
  <tbody>
<?php while($row=mysqli_fetch_array($SELECT_QUERY_GET)){?>
  <tr>
      <th scope="row"><?php echo $sn++; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['cost']; ?></td>
      <td><?php echo $row['date_time']; ?></td>
    </tr>
<?php }?>
      
  </tbody>
</table>



        </div>
        <?php include 'footer.php';?>
    </body>
</html>