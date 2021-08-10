<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/forget.css">
</head>
<body>
    <?php
    include 'outheader.php';
    ?>
    <div class="full">
    <div class="card col-md-5 col-xs-12 col-xl-3 col-lg-6" style="top:50px;margin:10px;padding:10px;height:max-content;background-color: rgba(0, 0, 0, 0.7); color:white;">
        <div class="card-heading ">User Password Change</div>
        <div class="card-body">
    <form action="password-reset.php" method="post">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" inputmode="numeric" class="form-control" id="mobile" name="mobile">
    </div>
    <div class="form-group">
        <label for="password-new">New Password</label>
        <input type="password-new" class="form-control" id="password-new" name="password-mew">
    </div>

    <div class="form-group">
        <label for="password-confirm">Confirm Password</label>
        <input type="password-confirm" class="form-control" id="password-confirm" name="password-confirm">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit"></button>
    </div>
    </form>
    </div>
    </div>
</div>

<?php 
include 'footer.php';
?>
</body>
</html>