<?php
    include 'session.php';
    echo '<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="user_index.php">CGC Book Project </a>
    <i class="navbar-brand" style="margin-left:250px;">Welcome Mr.'.$name_of_user.' </i>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="user_product.php">My Orders     <i class="fas fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_settings.php">Profile     <i class="fas fa-user-alt"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout_user.php">Logout    <i class="fas fa-sign-out-alt"></i></a>
        </li>
      </ul>
    </div>
  </nav>';

?>