<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as new User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
    <?php
    include 'outheader.php';
    ?>
    <br><br>
<div class="full">
    <div class="card" style="top:20px;margin:10px;padding:10px;background-color: rgba(0, 0, 0, 0.7); color:white;">
        <div class="card-heading ">User Registration</div>
        <div class="card-body">
    <form action="register_new_action.php" method="post" >
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group"></div>
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
    <div class="form-group"></div>
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
    <div class="form-group"></div>
    <label for="Address">Address</label>
    <input type="text" class="form-control" id="address" name="address"> 
    <div class="form-group"></div>
    <label for="mobile">Mobile</label>
    <input type="number" class="form-control" id="mobile" name="mobile">
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
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