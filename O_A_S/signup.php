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
    <center>
    <form class="form-signin spform" action="#" method="POST">
  <div class="text-center mb-4">
    <img class="bd-placeholder-img rounded-circle" width="75" height="75" src="img/p1_img1.jpg">  <rect fill="#777" width="100%" height="100%"/>
  </div>
  <h2>Sign up</h2>
  <div class="form-label-group">
    <input type="text" name="fname" id="inputText" class="form-control" placeholder="First Name" required autofocus>
   
  </div>
 <br> 
 <div class="form-label-group">
    <input type="text" name="lname" id="inputText" class="form-control" placeholder="Last Name" required autofocus>
   
  </div>
 <br> 
  <div class="form-label-group">
    <input type="email" name="Email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
   
  </div>
 <br> 
  <div class="form-label-group">
    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required> <br>
  
  </div>
   <div class="form-label-group">
    <input type="password" name="pass2" id="inputPassword" class="form-control" placeholder="Re-Password" required>
  
  </div><br>
  <button class="btn btn-lg btn-success btn-block" name="submit" type="submit" type="submit">Sign up</button>
  <br>
  </form></center>
</body>
</html>
<?php


include 'dbcon.php';
/*$conn = mysqli_connect('localhost','root','','o_a_s');*/

if(isset($_POST['submit'])){

 $fname=$_POST['fname'];
  $lname=$_POST['lname'];
$email=$_POST['Email'];
 $pass=$_POST['pass'];
 $pass2=$_POST['pass2'];
$qury="INSERT INTO `supdata`( `FNAME`, `LNAME`, `EMAIL`, `PASS1`, `PASS2`) VALUES ('$fname','$lname','$email','$pass','$pass2')";
$send=mysqli_query($conn,$qury);
if($send){
  ?> <script> alert("Ragestraction successfull !!");
    window.open('login.php','_self');</script> <?php

}else{
  echo "samthing is worong";
}
}else{
  echo "samthing is wrong";
}


?>