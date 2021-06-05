<?php
session_start();

include 'dbcon.php';
/*$conn = mysqli_connect('localhost','root','','o_a_s');*/




if(isset($_POST['submit'])){

   echo $adhar=$_POST['ADHAR'];
     
   echo $mob=$_POST['MOB'];

   echo $sfn=$_POST['SFN'];
   
   echo $smn=$_POST['SMN'];
   
   echo $sln=$_POST['SLN'];
   
   echo $ffn=$_POST['FFN'];
   
   echo $fmn=$_POST['FMN'];
   
   echo $fln=$_POST['FLN'];
   
   echo $mfn=$_POST['MFN'];
   
   echo $mmn=$_POST['MMN'];
   
   echo $mln=$_POST['MLN'];
   
   echo $cfn=$_POST['CFN'];
   
   echo $cmn=$_POST['CMN'];
   
   echo $cln=$_POST['CLN'];
   
   echo $um=$_POST['MR'];

   echo $Date=$_POST['DOB'];
    
        
   echo $bplace=$_POST['BPLCE'];
   
   echo $bgrp=$_POST['BGROUP'];
   
   echo $state=$_POST['STATE'];
    
   echo $dist=$_POST['DIST'];
    
   echo $tq=$_POST['TQ'];
    
   echo $city=$_POST['CITY'];
    
   echo $address=$_POST['ADDRESS'];
   
   echo $Category=$_POST['CATAG']; 
   
   echo $Caste=$_POST['CASTE'];
   
   echo $sbcast=$_POST['SBCAST'];
   
   $_SESSION['ADHAR']=$adhar;   
 
  }



   $quryi="INSERT INTO `students`( `ADHAR`, `MOB`,`SFN`, `SMN`, `SLN`,`FFN`, `FMN`, `FLN`,`MFN`, `MMN`, `MLN`,`CFN`, `CMN`, `CLN`,`MR`,`DOB`,`CHM`,`BPLCE`, `BGROUP`, `STATE`, `DIST`, `TQ`, `CITY`, `ADDRESS`, `CATAG`, 
   `CASTE`, `SBCAST`) VALUES ('$adhar','$mob','$sfn','$smn','$sln','$ffn','$fmn','$fln','$mfn','$mmn','$mln','$cfn','$cmn','$cln','$um','$Date','$chm','$bplace','$bgrp','$state','$dist','$tq','$city','$address','$Category','$Caste','$sbcast')";
  $result=mysqli_query($conn,$quryi);
  if($result){
    $_SESSION['ADHAR']=$adhar;
    $_SESSION['ADHAR1']=$adhar; 

   ?> <script> alert("DATA SAVE SUCCESSFULLY  !!");
    window.open('adinfo.php','_self');</script> <?php
  }else{
    ?> <script> alert("SAMTHISNG IS WRONG  !!");
    window.open('admission.php','_self');</script> <?php
  }


?>