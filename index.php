<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/opening.css">  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </head>
<body>
<?php 
include 'outheader.php'?>

<div class="opening col-xs-1">

<div class="main  col-xs-1">
  <h2>Welcome to CGC Book Store</h2>

  <h5>Buy and Sell , Used and New Books</h5>
  
  <button type="button" class="btn btn-danger" ><a href="signup.php" style="text-decoration:none; color:white"> Shop Now</a></button>


  

</div>


</div>
<div class="container">
         <h1 class="text-center">Our Top World Famous Products</h1> 
         <div class="row">
             <div class="col-md-4 img-thumbnail" >
                <img src="img/book1.jpeg" alt="" class="img-thumbnail">
                <h3>Books</h3>
                <p>Choose best at resoanable rate</p>
             </div>
             <div class="col-md-4  img-thumbnail" >
                <img src="img/notebooks.jpg" alt="" class="img-thumbnail">
                <h3>Notebooks</h3>
                <p>Choose best at resoanable rate</p>
             </div>
             <div class="col-md-4 img-thumbnail" >
                <img src="img/stationary.jpg" alt="" class="img-thumbnail">
                <h3>Stationary</h3>
                <p>Choose best best at resoanable rate</p> 
             </div>
         </div>


<?php
include "footer.php";
?>
</body>
</html>