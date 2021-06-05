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
          <a class="nav-link" href="profile.php">Profile<span class="sr-only">(current)</span></a>
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




<div class="apform">
<form action="addata.php" method="POST">
<table class="table table-sm table-success"  >
  <thead>
  <tr align="center">
        <th align="left" colspan="4">
        <h3>Personal Informaction Seaction</h3> 
        </th>
    <tr>
  
  <tr>
      <th align="left">Personal informaction </th>
        <td><input type="number" name="ADHAR" required="" placeholder="Enter Your Adhar No."></td>
        <td><input type="number" name="MOB" required="" placeholder="Enter Mobaile No."></td>
        <td></td>
    </tr>
  
     <th></th>
        <th>First Name</th>
        <th>Middel Name</th>
        <th>Last Name</th>
  </thead>
  <tbody>
    <tr>
      <th align="left">Name of The Student<br>(in case of changed name)</th>
        <td><input type="text" name="SFN" required=""></td>
        <td><input type="text" name="SMN"></td>
        <td><input type="text" name="SLN"></td>
    </tr>
    <tr>
      <th align="left">Father's/Husband Name</th>
        <td><input type="text" name="FFN"></td>
        <td><input type="text" name="FMN"></td>
        <td><input type="text" name="FLN"></td>
    </tr>
    <tr>
        <th align="left">Mother's Name<br>(Name before marriage)</th>
        <td><input type="text" name="MFN"></td>
        <td><input type="text" name="MMN"></td>
        <td><input type="text" name="MLN"></td>
      </tr>
      <tr>
        <th align="left">Previous Name of The Student<br>(in case of changed name)</th>
        <td><input type="text" name="CFN"></td>
        <td><input type="text" name="CMN"></td>
        <td><input type="text" name="CLN"></td>
      </tr>
      <tr>
        <th align="left" colspan="4">Marital Status : 
          <select name="MR">
            <option placeholder="select">
              <option>Unmarried </option>
              <option>Married</option>
              <option>MarriedDivorced</option>
            
            </option>
          </select>
        </th>
      </tr>
      <tr>
        <th align="left" colspan="2">Date of Birth:
          <input type="Date" name="DOB">
        </th>
        <th align="left" colspan="2">Gender
           <select name="CHM">
            <option placeholder="select">
              <option>Male </option>
              <option>Female</option>
              <option>Other</option>
            
            </option>
        </th>
      </tr>
      <tr>
        <th align="left" colspan="2">Place Birth : 
          <input type="text" name="BPLCE" required="required">
        </th>
        <th align="left" colspan="2">Blood Group (with RH)
          <select name="BGROUP">
            <option placeholder="select">
              <option>A+</option>
              <option>B+</option>
              <option>AB</option>
              <option>O</option>
            </option>
          </select>
        </th>
      </tr>
      <tr>
        <th align="left" colspan="2">Religion : 
          <input type="text" name="REL" required="required">
        </th>
        <th align="left" colspan="2">Citizen of (country name) :
         <select name="CTZ">
            <option placeholder="select">
              <option value="Indian">Indian</option>
            </option>
          </select>
        </th>
        </th>
      </tr>
      <tr>
        <th colspan="4">Address of Correspondence</th>
      </tr>
      <tr align="left">
        <th>State
          <input type="text" name="STATE">
        </th>
        <th>District
          <input type="text" name="DIST">
        </th>
        <th>Tehsil
          <input type="text" name="TQ">
        </th>
        <th>City/Village
          <input type="text" name="CITY">
        </th>
      </tr>
      <tr >
      <th > </th>
      <th colspan="3" >Address<textarea name="ADDRESS" cols="40" rows="1" placeholder="Enter your address"></textarea></th>
      </tr>
        <tr align="center">
        <th align="left" colspan="4">
        <h3>2 . Legal Reservation Information Section</h3> 
        </th>
    <tr>
    </tr>
        <tr >
        <th align="left" colspan="4">
        Category:
       <select name="CATAG">
            <option placeholder="select">
              <option>Open</option>
              <option>SC</option>
              <option>NT</option>
              <option>DT(A)</option>
             <option>NT(B)</option>
             <option>NT(C)</option>
             <option>NT(D)</option>
             <option>OBC</option>
             <option>SBC</option>
             </option>
          </select>
        </th>
    <tr>
     <tr align="center">
        <th align="left" colspan="4">
        Caste :
          <input type="text" name="CASTE" size="00">
          Subcaste :
          <input type="text" name="SBCAST" size="00">
          If Physically Challenged :
          <input type="checkbox" name ="Visually Impaired ">Visually Impaired
           <input type="checkbox" name ="Speech And Hearing "> Speech And Hearing 
        </th>
<tr>
      <th></th>
      <th></th>
      <th align="center" colspan="3">
        <input type="submit" name="submit" class="btn btn-success"> 
        </form>
     </th>

     </tr>
     <tr>
     <td align="right" colspan="4">
     <a href="adinfo.php">
       <button type="button" class="btn btn-warning">Continue</button></a>
  </td>
 </tr>
  </tbody>
 </table>


  </div>


 </body>
</html>

