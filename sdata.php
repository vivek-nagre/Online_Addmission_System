<?php


$conn=mysqli_connect('localhost','root','','o_a_s');
if(isset($_POST['submit'])){

 $fname=$_POST['fname'];
  $lname=$_POST['lname'];
$email=$_POST['Email'];
 $pass=$_POST['pass'];
 $pass2=$_POST['pass2'];
$qury="INSERT INTO `supdata`( `FNAME`, `LNAME`, `EMAIL`, `PASS1`, `PASS2`) VALUES ('$fname','$lname','$email','$pass','$pass2')";
$send=mysqli_query($conn,$qury);
if($send){
	echo "ok rk";

}else
{
	echo "samthing is worong";
}
}else
{
	echo "samthing is wrong";
}


?>