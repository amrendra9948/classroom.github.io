<?php

@include 'config.php';

session_start();
ob_start();


if(isset($_POST['submit'])){

   //$name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   //$cpass = md5($_POST['cpassword']);
   //$user_type = $_POST['user_type'];
   //$Assignments = mysqli_real_escape_string($conn, $_POST['Assignments']);


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if(isset($_POST['rememberme'])){

      setcookie('emailcookie',$email,time()+86400);
      setcookie('passwordcookie',$pass,time()+86400);

      header('location:login_form.php');
      }

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['Assignments_name'] = $row['Assignments'];
         $_SESSION['email_name'] = $row['email'];


         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['Assignments_name'] = $row['Assignments'];
         $_SESSION['email_name'] = $row['email'];


         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email" value="<?php if (isset($_COOKIE['emailcookie'])) { echo $_COOKIE['emailcookie']; } ?>">
      <input type="password" name="password" required placeholder="enter your password" value="<?php if (isset($_COOKIE['passwordcookie'])) { echo $_COOKIE['passwordcookie']; } ?>">
      <input type="checkbox" name="rememberme" >Remember Me
      <input type="submit" name="submit" value="login now" target="_blank" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

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