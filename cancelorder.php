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


$pnr=$_SESSION['pnrno'];
$name=$_SESSION['user'];



$sql="UPDATE orders SET deliverystatus='Cancelled' WHERE username='$name' and pnr=$pnr";
$run=mysqli_query($conn, $sql);
if($run){

	echo"<h1 style='text-align: center;'> YOU ORDER HAS BEEN SUCESSFULLT CANCELLED</h1>";
}
else
		echo "<h1 style='text-align: center;'>PLEASE TRY AGAIN</h1>";



?>
</div>
<div style="float: left;padding: 20px;padding-left: 500px">
<form action='quantity.php' method='POST'>
	

	
	<button type='submit' name='submit' >ADD TO CART</button>
	



</form>
</div>
<div style="float: left; padding: 20px"> 
<form action="login.php">
   <button type="submit" class="button_1">LOGOUT</button>
</form>
</div>
</body>
</html>







