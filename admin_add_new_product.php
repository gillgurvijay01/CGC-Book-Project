<?php
session_start();
// echo $_SESSION['id'];
// die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin_add_new_prod.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php
        include "admin-header.php";
        ?>
    <div class="full">
    <div class="card col-md-5 col-xs-12 col-xl-3 col-lg-6" style="top:20px;padding:10px;height:max-content;background-color: rgba(0, 0, 0, 0.7); color:white;">
        <div class="card-heading " style="margin-top: 100px;">Add New Product</div>
        <div class="card-body">
        <form action="admin_register_new_product.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="name" class="form-control" id="name" name="name">
    </div>
    <div class="form-group"><label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description"></div>

    <div class="form-group"><label for="last_name">Cost</label>
    <input type="number" class="form-control" id="cost" name="cost"></div>

    <div class="form-group"><label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image"> </div>

    <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary" value="submit"></button>
    </div>
</form>
    </div>
    </div>
</div>

<?php
include "footer.php";
?>
</body>
</html>