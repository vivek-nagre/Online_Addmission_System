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


<!DOCTYPE html>
<html>
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
    <style type="text/css">
      body{
        background:#c0f1bc; 
      }
    </style>


    <title>Online addmision </title>
    <style type="text/css">
    .inp{
    	width:200px;
    	height:40px; 
    	border-radius:10px;
    	border-color: orange; 
       font-size:20px;
    }
    .ser{
    	margin-top:5px; 
    	width:200px; 
    	font-size:18px; 
    }
   
    </style>
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

<center style="margin-top:100px; ">
	<form action="userpro.php" method="POST">  
	 <input class="inp" type="text" name="adhar" placeholder="Enter Adhar Number" required="">
		<input class="inp rk" type="text" name="mob" placeholder="Enter Mobile Number" required="">
		<br>
		<input class="btn btn-success ser" type="submit" name="submit" value="search" >
	</form>
</center>

<br>
 <div class="jumbotron">
    <div class="container">
     kjksdfksjfjsdfkjsdklfsflksjfkvsdfsdfjsdkfjsdkl
    </div>
  </div>

</body>
</html>