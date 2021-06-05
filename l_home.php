<?php
session_start();
if(!isset($_SESSION['U_ID'])){
	{
  ?>
 <script> 
    window.open('login.php','_self');
    </script> 
   <?php 
    
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('.slideshow').cycle({
        fx: 'fade' 
      });
    });
    </script>




    <title>Online addmision </title>
  </head>
  <body>
   <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['U_ID']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Profile<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="admission.php">Admission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Update</a>
        </li>
      </ul>
        
      <a href="logout.php">
       <button type="button" class="btn btn-info">Log out</button></a>
      
    </div>
  </nav>
</header>
<div class="slideshow">
    <img  class="rk" src="img/p1_img3.jpg"  />
    <img  class="rk" src="http://malsup.github.com/images/beach2.jpg"  />
    <img class="rk" src="http://malsup.github.com/images/beach3.jpg"  />
    <img  class="rk" src="http://malsup.github.com/images/beach4.jpg" />
    <img class="rk" src="http://malsup.github.com/images/beach5.jpg"  />
  </div>

 <div class="container marketing tk ">


 </body>
</html>

<?php
 echo "ok boss";
 ?>