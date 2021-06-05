<?php
include 'dbcon.php';
/*$conn = mysqli_connect('localhost','root','','o_a_s');*/




 
	echo  $adhar=$_POST['ADHAR'];
	
	echo $mob=$_POST['MOB'];
	
	echo $cource=$_POST['COURCE'];
	
	echo $sub1=$_POST['SUB1'];
	
	echo $sub3=$_POST['SUB3'];
	
	echo $sub5=$_POST['SUB5'];
	
	echo $sub7=$_POST['SUB7'];
	
	echo $sub2=$_POST['SUB2'];
	
	echo $sub4=$_POST['SUB4'];
	
	echo $sub6=$_POST['SUB6'];
	
	echo $sub8=$_POST['SUB8'];
	
	echo $photo=$_FILES['PHOTO']['name'];
	
	echo $phototmp=$_FILES['PHOTO']['tmp_name'];
	move_uploaded_file($phototmp,"detaimg/$photo");
	echo $sig=$_FILES['SIG']['name'];
	
	echo $sigtmp=$_FILES['SIG']['tmp_name'];
	move_uploaded_file($sigtmp,"detaimg/$sig");



	echo $std10=$_FILES['STD10']['name'];
	
	echo $std10tmp=$_FILES['STD10']['tmp_name'];
	move_uploaded_file($std10tmp,"detaimg/$std10");


	echo $std12=$_FILES['STD12']['name'];
	
	echo $std12tmp=$_FILES['STD12']['tmp_name'];
	move_uploaded_file($std12tmp,"detaimg/$std12");


	echo $tc=$_FILES['TC']['name'];
	
	echo $tctmp=$_FILES['TC']['tmp_name'];
	move_uploaded_file($tctmp,"detaimg/$tc");



  
	echo $cast=$_FILES['CAST']['name'];
	
	echo $casttmp=$_FILES['CAST']['tmp_name'];
	move_uploaded_file($casttmp,"detaimg/$cast");

	echo $nc=$_FILES['NC']['name'];
	
	echo $nctmp=$_FILES['NC']['tmp_name'];
	move_uploaded_file($nctmp,"detaimg/$nc");
 

	echo $mc=$_FILES['MC']['name'];
	
	echo $mctmp=$_FILES['MC']['tmp_name'];
	move_uploaded_file($mctmp,"detaimg/$mc");

	echo $dc=$_FILES['DC']['name'];
	
	echo $dctmp=$_FILES['DC']['tmp_name'];
	move_uploaded_file($dctmp,"detaimg/$dc");


	echo $fc=$_FILES['FC']['name'];
	
	echo $fctmp=$_FILES['FC']['tmp_name'];
	move_uploaded_file($fctmp,"detaimg/$fc");


	echo $adhari=$_FILES['ADHARI']['name'];
	
	echo $adharitmp=$_FILES['ADHARI']['tmp_name'];
	move_uploaded_file($adharitmp,"detaimg/$adhari");

	if (isset($_POST['submit'])) {


	  $quryi="INSERT INTO `addata`(`ADHAR`, `MOB`, `COURCE`, `SUB1`, `SUB3`, `SUB5`, `SUB7`, `SUB2`, `SUB4`, `SUB6`, `SUB8`, `PHOTO`, `SIG`, `STD10`, `STD12`, `TC`, `CAST`, `NC`, `MC`, `DC`, `FC`, `ADHARI`) VALUES ('$adhar','$mob','$cource','$sub1','$sub3','$sub5','$sub7','$sub2','$sub4','$sub6','$sub8','$photo','$sig','$std10','$std12','$tc','$cast','$nc','$mc','$dc','$fc','$adhari')";


 $result=mysqli_query($conn,$quryi);
if($result){
	?> <script> alert("DATA SAVE SUCCESSFULLY  !!");
    window.open('profile.php','_self');</script> <?php
}else{
	?> <script> alert("SAMTHISNG IS WORIG !!");
    window.open('adinfo.php','_self');</script> <?php
}
 
 
 }
 


?>