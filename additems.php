<?php
include("dbconnect.php");
include("orders.php");
//error_reporting(E_ERROR | E_PARSE);

$it=$_POST["item"];
$pr=$_POST["price"];


$sqlprice="INSERT INTO `fooditems`(`items`, `itemprice`) VALUES ('$it',$pr)";
$in=mysqli_query($conn,$sqlprice);


if($in)
{
	echo "Added Item";
}
else
	echo "<div style='text-align:center;color:Red'>Not Added $it cart As it is already added</div>";
 







?>