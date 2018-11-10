<html>

<head> <link rel="stylesheet" href="assets/css/main.css" /></head>
<div  ><link rel="stylesheet" href="style.css">

	<header id="header">
				<a class="logo">AIR CHEFS</a>
				
				
				</nav>
			</header>

<body class="is-preload" ><link rel="stylesheet" type="text/css" href="style.css" >

<div id="heading" ><h1>STATUS</h1> 
</div>



<div style="padding-top: 30px;">
<?php
session_start();
include("dbconnect.php");


$id;
$name=$_SESSION['user'];
$price=$_SESSION['k'];
$pnr=$_POST['pnr'];
$_SESSION['pnrno']=$pnr;

$sql="INSERT INTO orders (username,price,pnr,deliverystatus) values('$name',$price,$pnr,'Placed')";
$run=mysqli_query($conn, $sql);
if($run){
	$sqldel="DELETE from cart where username='$name'";
$rundel=mysqli_query($conn,$sqldel);

	echo"<h1 style='text-align: center;'>THANK YOU FOR PLACING THE ORDER</h1>";
}
else
		echo "<h1 style='text-align: center;'>PLEASE TRY AGAIN</h1>";



?>
</div>

<form action="cancelorder.php" method="POST">
 <div style="padding:27px;float: left;	 padding-left: 40%;">   <button type="submit" class="button_1">CANCEL ORDER</button></div>

</form>
<form action="login.php">
 <div style="padding-left:50%;padding:20px; float: left;">   <button type="submit" class="button_1">LOGOUT</button></div>
</form>

</body>
</html>







