<?php
include 'dbcon.php';
/*$conn = mysqli_connect('localhost','root','','o_a_s');*/

if(isset($_POST['submit'])){
	$uname=$_POST['Email'];
	$pass=$_POST['pass'];
    $qury="SELECT * FROM `supdata` WHERE `EMAIL`='$uname' AND `PASS1`='$pass'";
     $data=mysqli_query($con, $qury);
     $row=mysqli_num_rows($data);
     $fetch=mysqli_fetch_assoc( $row);
   if($fetch < 1){
   	echo "<h1> welcome rk </h1>";
     //$row=mysqli_num_rows($data);
   }else{
   	echo "who are you";
   }
    

}else{
	echo "samthing is rong";
}
//