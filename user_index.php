<?php
   include('session.php');
?>
<?php
     include 'db_con.php';
     $SELECT_QUERY="SELECT * from product";
     $SELECT_QUERY_GET=mysqli_query($con,$SELECT_QUERY)
     or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include 'user_header.php';?>

    <div class="container" style="margin-top:100px;margin-bottom:50px;">
         
         <?php while($row=mysqli_fetch_array($SELECT_QUERY_GET)){?>
            <div class="row img-fluid">
             <div class="col-md-3 img-thumbnail" >
                <img src="media/<?php echo $row['file_img_link']?>" alt="" class="img-thumbnail">
                <h3><?php echo $row['name']?></h3>
                <h4><i class="fas fa-rupee-sign"></i><?php echo $row['cost']?></h4>
                <p><?php echo $row['detail_desc']?></p>
                <a class="btn btn-danger" href="order_prod.php?pid=<?php echo $row['pid']?>">Order</a>
            </div>
            
<?php }?>


    <?php include 'footer.php';?>
</body>
</html>