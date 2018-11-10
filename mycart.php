

<!DOCTYPE html>



<?php
include("dbconnect.php");
include("quantity.php");
error_reporting(E_ERROR | E_PARSE);
session_start(); 
$it=$_POST['item'];
$quantity=$_POST['quantity'];
$name=$_SESSION['user'];

$sqlprice="SELECT * from fooditems where items='$it'";
$price=mysqli_query($conn,$sqlprice);
$res=mysqli_fetch_assoc($price);

$sql="INSERT INTO cart (username,items,quantity,price) values('$name','$it',$quantity,{$res['itemprice']}*$quantity)";
$inssql=mysqli_query($conn,$sql);
if($inssql)
{
	echo "<div style='text-align:center;color:green'>Added $it cart</div>";
}
else
	echo "<div style='text-align:center;color:Red'>Not Added $it cart As it is already added</div>";
 







?>