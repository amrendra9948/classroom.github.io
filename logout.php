<?php

@include 'config.php';

session_start();
session_unset();
session_destroy();

header('location:login_form.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>iEducate - Transforming online Education</title>
</head>
<body>
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