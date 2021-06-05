<?php 
error_reporting(0);
session_start();
//session_start();
if(!$_SESSION['U_ID']==0)
{
  ?>
 <script> 
    window.open('l_home.php','_self');
    </script> 
   <?php 
    
} 

include 'dbcon.php';
/*$conn = mysqli_connect('localhost','root','','o_a_s');*/

if(isset($_POST['submit'])){
   $U_name = $_POST['U_name'];
   $U_pass1= $_POST['U_pass1'];
  $qry="SELECT * FROM `supdata` WHERE `FNAME`='$U_name'AND `PASS1`='$U_pass1'";
   $run=mysqli_query($conn,$qry);
    $row=mysqli_num_rows($run);
    $deta = mysqli_fetch_assoc($row);
   if($row < 1){
    ?> <script> alert("USEAR NAME OR PASSWORD IS WORNG !!");
    window.open('login.php','_self');</script> <?php
   }else{
    $deta = mysqli_fetch_assoc($run);
   $id= $deta['FNAME'];
  // session_start();
     $_SESSION['U_ID']=$id;
  // echo  $_SESSION['U_ID'];
   header('location:uinfo.php');
   }
  }
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
     <link rel="stylesheet" href="css/style.css" >

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plg.js"></script>
    <script type="text/javascript" src="js/cycle.js"></script>
    </head>
    <body class="lpbody">
     <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">Yeshwantrao Chavan Collage Sillod</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">About us</a>
        </li>
      </ul>
       <a href="signup.php">  
      <button type="button" class="btn btn-success">Sign up</button></a>
      <a href="login.php">
       <button type="button" class="btn btn-primary active" >Login</button></a>
      
    </div>
  </nav>
    <center>
    <form class="form-signin lpform" action="#" method="POST">
  <div class="text-center mb-4">
    <img class="bd-placeholder-img rounded-circle" width="75" height="75" src="img/p1_img1.jpg">  <rect fill="#777" width="100%" height="100%"/>
  </div>
  <h2>Sign in</h2>
  <div class="form-label-group">
    <input type="text" name="U_name" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
   
  </div>
 <br>
  <div class="form-label-group">
    <input type="password" name="U_pass1" id="inputPassword" class="form-control" placeholder="Password" required>
  
  </div><br>
  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit" type="submit">Sign in</button>
  <br>
  </form></center>
</body>
</html>