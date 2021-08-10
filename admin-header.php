<?php
   echo '<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
   <a class="navbar-brand" href="admin-index.php">Admin Panel</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ml-auto">
       <li class="nav-item">
         <a class="nav-link" href="admin-all-user.php">All Users     <i class="fas fa-users"></i></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="admin-all-products.php">Products      <i class="fas fa-luggage-cart"></i></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="admin-user-products.php">User Products Ordered     <i class="fas fa-shopping-cart"></i></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="admin-admin-unauth.php">Admin Unauth Entry <i class="fas fa-exclamation-triangle"></i></a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="admin-log-out.php">Log Out  <i class="fas fa-sign-out-alt"></i></a>
     </li>
       
     </ul>
   </div>
 </nav>'
?>