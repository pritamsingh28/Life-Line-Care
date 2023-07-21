<?php
include "header.php";
$show_success=false;
$failed=false;
$emailfailed=false;
 include "server.php";
 if(isset($_POST['register'])){
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   //if($branch=="-Select-"){
    // $invalidbranch=true;



   $sql= "select * from user where email='$email'";
   $query_run = mysqli_query($conn,$sql);
   if(mysqli_num_rows($query_run)<1){


   $query = "insert into user value(null,'$fname', '$lname','$email','$password')";
   $query_run = mysqli_query($conn,$query);
   if($query_run){
    $show_success=true;
    }
    else{
      $failed=true;
    }
  }
    else{
      $emailfailed=true;
    }
 }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <meta charset="utf-8">
    <title>Travel </title>
    <!--- Bootstrap files-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js" charset="utf-8"></script>

    </script>

    <style>body{
      background-image:url("img/back (1).jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }</style>

    <!-- CSS file --->
    <link rel="stylesheet"href="style.css">
  </head>
  <body>
    <?php
    if($show_success){
      echo "<script>
      Swal.fire({
     icon: 'success',
   title: 'Success',
   text: 'Registration Successfully Completed',
   confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Login'
}).then((result) => {
    if (result.isConfirmed) {
    window.location.href='login.php';
  }
})</script>";
    }
    if($failed){
      echo "<script>
      Swal.fire({
     icon: 'error',
   title: 'Oops..',
   text: 'Registration UnSuccessfull',
})</script>";
    }
    if($emailfailed){
      echo "<script>
      Swal.fire({
     icon: 'error',
   title: 'Oops..',
   text: 'Emai is Already Exist',
})</script>";
    }
     ?>
    <!-- Header code -->

    <!-- Login code-->
    <section id="Login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4 style="color:black;"><b>Registration form</b> </h4></center>
          <form  action="" method="post">
            <div class="form-group">
              <label><b><font color ="Black">First Name:</font></b></lable>
                <input class="form-control" type="text" name="fname" placeholder="Enter Your First Name" required>
          </div>
          <div class="form-group">
              <label><b><font color ="black">Last Name:</font></b></lable>
              <input class="form-control" type="text" name="lname" placeholder="Enter Your Last Name" required>
        </div>
            <div class="form-group">
                <label><b><font color ="Black">Email ID:</font></b></lable>
                <input class="form-control" type="text" name="email" placeholder="Enter Your Email" required>
          </div>
          <div class="form-group">
              <label><b><font color ="black">Password:</font></b></lable>
              <input class="form-control" type="Password" name="password" placeholder="Enter Your Password" required>
          </div>
          <button class="btn btn-success" type="Submit" name="register">Register</button>
          </form>
          <a href="login.php"><font color ="white"><b>Click here to login</b></font></a>
        </div>
        </div>
    </section>
  </body>
</html>
