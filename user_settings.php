<?php
 include 'session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Settings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/update_user.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</head>
<body>
    <?php include 'user_header.php';?>
    <center>
    <div class="card col-md-5 col-xs-12 col-xl-3 col-lg-6" style="top:20px;margin-top:100px;padding:10px;height:max-content;">
       <h1><div class="card-heading">User Detail Change</div></h1>
        <div class="card-body">
    <form action="user_update_email.php" method="post">
    <div class="form-group">
        <label for="email">Email Change</label>
        <input type="email" class="form-control" id="email_old" name="email_old" value="<?php echo $row['email'];?>" disabled>
        <input type="email" class="form-control" id="email_new" name="email_new" placeholder="Enter New Email">
        <input onclick="alert('Are You Sure?');" type="submit" class="btn btn-primary" value="Change Email">
    </div>
    </form>
    <form action="user_update_name.php" method="post">
    <div class="form-group">
        <label for="email">Name Change</label>
        <input type="text" class="form-control" id="fname_old" name="fname_old" value="<?php echo $row['first_name'];?>" disabled>
        <input type="text" class="form-control" id="fname_new" name="fname_new" placeholder="Enter New First Name">
        

        <input type="text" class="form-control" id="lname_old" name="lname_old" value="<?php echo $row['last_name'];?>" disabled>
        <input type="text" class="form-control" id="lname_new" name="lname_new" placeholder="Enter New Last Name">
        <input onclick="alert('Are You Sure?');" type="submit" class="btn btn-primary" value="Change Name">
    </div>
    </form>
    
    <form action="user_update_address.php" method="post">
    <div class="form-group">
        <label for="address_old">Address Change</label>
        <input type="text" class="form-control" id="address_old" name="address_old" value="<?php echo $row['address'];?>" disabled>
        <input type="text" class="form-control" id="address_new" name="address_new" placeholder="Enter New Address">
        <input onclick="alert('Are You Sure?');" type="submit" class="btn btn-primary" value="Change Address">
    </div>
    </form>
    <form action="user_update_password.php" method="post">
    <div class="form-group">
        <label for="address_old">Password Change</label>
       
        <input type="password" class="form-control" id="password_new" name="password_new" placeholder="Enter New Password">
        <input type="password" class="form-control" id="confirm_new" name="confirm_new" placeholder="Confirm New Password">
        <input onclick="alert('Are You Sure?');" type="submit" class="btn btn-primary" value="Change Address">
    </div>
    </form>
    </div>
    </div>
    </center>
    <?php include 'footer.php';?>
</body>
</html>