<?php 
session_start(); 

include("dbconnect.php");

$Email=$_POST["LEmailID"];
$Pass=$_POST["LPassword"];
$_SESSION['name']=$Email;
//$Email="akhil";
//$Pass="akhil";
//$sql="SELECT * FROM users where email='$Email' and password ='$Pass'";

if($Email=='admin' and $pass='adim')
{
	echo "<script> location.href='orders.php'; </script>";
}


else{
$sql='SELECT * FROM users where username="'.$Email.'" and password="'.$Pass.'"';
$run=mysqli_query($conn,$sql) or die('error:'.mysql_error);
$count=mysqli_num_rows($run);
if(isset($_POST["submit"]))
{

if($count==1)
{
	echo "<script> location.href='quantity.php'; </script>";
        exit;
}
else{
	echo "LOGIN FAILED. PLEASE REGISTER OR CHECK YOUR DETAILS";
}
}
//echo ($count);
}

 ?>


