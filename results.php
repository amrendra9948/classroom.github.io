<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

if(!isset($_SESSION['email_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>Students</span></h3>
      <h1>Name- <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <h3>Email Id: <span><?php echo $_SESSION['email_name'] ?></span></h3>

      <p>this is an Student page</p>
      
      <a href="logout.php" class="btn">logout</a>
      <a href="fee.php" class="btn">Fee</a>
      
      <a href="trainings.php" class="btn">Trainings</a>


   </div>

</div>
<!footer-->
<footer class="footer"> 
      <div class="footer-content text-center"> 
         <p style="text-align: center;"> 
            Copyright © 2024, @Classroom Mangement System-2024 | All rights reserved
         </p> 
         <div class="social-links"> 
            <div class="footer-menu"> 
               <ul class="footer-menu-list"> 
                  <li class="footer-list-items"> 
                     <a class="footer-links" href="#"> 
                        <i class="fab fa-facebook-f"></i> 
                     </a> 
                  </li> 
                  <li class="footer-list-items"> 
                     <a class="footer-links" href="#"> 
                        <i class="fab fa-twitter"></i> 
                     </a> 
                  </li> 
                  <li class="footer-list-items"> 
                     <a class="footer-links" href="#"> 
                        <i class="fab fa-instagram"></i> 
                     </a> 
                  </li> 
                  <li class="footer-list-items"> 
                     <a class="footer-links" href="#"> 
                        <i class="fab fa-linkedin-in"></i> 
                     </a> 
                  </li> 
               </ul> 
            </div> 
         </div> 
      </div> 
   </footer>
   <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
      integrity= 
"sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"> 
   </script> 
   <script src="responsive.js"></script> 
</body>
</html>