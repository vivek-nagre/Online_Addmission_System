<?php
session_start();
  echo $adh = $_SESSION['ADHAR'];
include 'dbcon.php';
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
<?php
if (!isset($_SESSION['ADHAR'])) {

  ?>
 <script> 
     alert(" INSERT YOUR PRRSONAL INFORMACTION !!");
    window.open('admission.php','_self');
    </script> 
   <?php 
  
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
    <style type="text/css">
      body{
        background:#c0f1bc; 
      }
    </style>


    <title>Online addmision </title>
  </head>
  <body backgroundcolor="#c0f1bc">
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
          <a class="nav-link active" href="#">Admission</a>
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
<br><br>








<?php
$qurey="SELECT * FROM `addata`where `ADHAR`='$adh'";

$qurey2 ="SELECT * FROM `students` WHERE `ADHAR`='$adh'";
$result=mysqli_query($conn,$qurey);
 if($result){
 	//echo "ok rk";
   //echo mysqli_num_rows($result);
  $demo= mysqli_fetch_assoc($result);
 // print_r($demo);
  }else{
 	echo "not ok boss";
 }


 $result2=mysqli_query($conn,$qurey2);
 if($result){
  //echo "ok rk";
  // echo mysqli_num_rows($result2);
  $demo2= mysqli_fetch_assoc($result2);
// print_r($demo2);
  //print_r($demo);

 }else{
  echo "not ok boss";
 }
 /*$deta=mysqli_fetch_assoc($result);
 	 print_r($deta['ADHAR']);
*/
?>

<center><img  style="border-radius:50%; width:200px; height: 200px; align-items: center;" src="detaimg/<?php echo $demo['PHOTO']; ?>">
<br>
<h3><?php echo $demo2['SFN']; ?> <?php echo $demo2['SMN']; ?>  <?php echo $demo2['SLN']; ?></h3><br>
  <h5>Admission in <?php echo $demo['COURCE']; ?>  </h5>





</center>

<table class="table table-sm table-success"  >
  <thead>
  <tr align="center">
        <th align="left" colspan="4">
        <h3>Personal Informaction Seaction</h3> 
        </th>
    <tr>
  
  <tr>
      <th align="left">Personal informaction </th>
        <td> Adhar No :-<?php echo $demo2['ADHAR']; ?></td>
        <td>Mobile No:-<?php echo $demo2['MOB']; ?></td>
        <td></td>
    </tr>
  
     <th></th>
        <th>First  Name</th>
        <th>Middel Name</th>
        <th>Last Name</th>
  </thead>
  <tbody>
    <tr>
      <th align="left">Name of The Student<br>(in case of changed name)</th>
        <td><?php echo $demo2['SFN']; ?></td>
        <td><?php echo $demo2['SMN']; ?></td>
        <td><?php echo $demo2['SLN']; ?></td>
    </tr>
    <tr>
      <th align="left">Father's/Husband Name</th>
        <td><?php echo $demo2['FFN']; ?></td>
        <td><?php echo $demo2['FMN']; ?></td>
        <td><?php echo $demo2['FLN']; ?></td>
    </tr>
    <tr>
        <th align="left">Mother's Name<br>(Name before marriage)</th>
        <td><?php echo $demo2['MFN']; ?></td>
        <td><?php echo $demo2['MMN']; ?></td>
        <td><?php echo $demo2['MLN']; ?></td>
      </tr>
      <tr>
        <th align="left">Previous Name of The Student<br>(in case of changed name)</th>
       <td><?php echo $demo2['CFN']; ?></td>
        <td><?php echo $demo2['CMN']; ?></td>
        <td><?php echo $demo2['CLN']; ?></td>
      </tr>
      <tr>
        <th align="left" colspan="1">Marital Status : 
          <td><?php echo $demo2['MR']; ?></td>
        </th>
      </tr>
      <tr>
        <th align="left">Date of Birth:
           <td><?php echo $demo2['DOB']; ?></td>
        </th>
        <th align="left" >Gender :-
           <?php echo $demo2['CHM']; ?>
        </th>
      </tr>
      <tr>
        <th align="left" colspan="2"> Place Birth : 
          <?php echo $demo2['BPLCE']; ?>
        </th>
        <th align="left" colspan="2">Blood Group (with RH) :-
          <?php echo $demo2['BGROUP']; ?>
          </select>
        </th>
      </tr>
      <tr align="left">
        <th>State  :-
         <?php echo $demo2['STATE']; ?>
        </th>
        <th>District :-
         <?php echo $demo2['DIST']; ?>
        </th>
        <th>Tehsil    :-
           <?php echo $demo2['TQ']; ?>
        </th>
        <th>City/Village  :-
           <?php echo $demo2['CITY']; ?>
        </th>
      </tr>
      <tr >
      <th > </th>
      <th colspan="3" >Address :- <?php echo $demo2['ADDRESS']; ?> </th>
      </tr>
        <tr align="center">
        <th align="left" colspan="4">
        <h3>2 . Legal Reservation Information Section</h3> 
        </th>
    <tr>
    </tr>
        <tr >
        <th align="left" colspan="1">
        Category  :- <?php echo $demo2['CATAG']; ?>
        </th>
         <th align="left" colspan="1">
        Caste :- 
          <?php echo $demo2['SBCAST']; ?>
          
        </th>
    </tr>
  </tbody>
 </table>
</body>
</html>