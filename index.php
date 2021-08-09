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
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">CGC Book Project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Sign Up     <i class="fas fa-user-plus"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login       <i class="fas fa-sign-in-alt"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Admin  Login     <i class="fas fa-users-cog"></i></a>
      </li>
    </ul>
  </div>
</nav>

<div class="opening col-xs-1">

<div class="main  col-xs-1">
  <h2>Welcome to CGC Book Store</h2>

  <h5>Buy and Sell , Used and New Books</h5>
  
  <button type="button" class="btn btn-danger">Shop Now</button>


  

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