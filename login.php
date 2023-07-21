<?php

session_start();
include "server.php";
 if(isset($_POST['login'])){
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $sql = "select * from  `user` where email='$email' and password='$pass'";
   $query_run = mysqli_query($conn,$sql);
   if(mysqli_num_rows($query_run)>0){
     $_SESSION['email']=$email;
     $_SESSION['showlogin']=1;
     header("Location: home.php");
   }
    else{
     echo "<script>alert('Please Enter correct email id and password ');

     </script>";
   }
 }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <!--- Bootstrap files-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css.css" >
  </head>
  <body>
    <section id="Log-In">
    <div class="box">
      <span class="borderLine"></span>
      <form action="login.php" method="post">
        <h2>Log-in</h2>
        <div class="inputBox">
          <input type="text" name="email" required="required">
          <span>Email</span>
          <i></i>
        </div>
        <div class="inputBox">
          <input type="Password" name="password" required="required">
          <span>Password</span>
          <i></i>
        </div>
        <div class="link">

            <a href="register.php">For Register</a>
          </div>
          <input type="submit" name="login" value="Login"></input>
      </form>
  </div>
  </section>
  </body>
</html>
