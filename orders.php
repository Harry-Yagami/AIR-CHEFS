<html>

<head> <link rel="stylesheet" href="assets/css/main.css" /></head>
<div  ><link rel="stylesheet" href="style.css">

	<header id="header">
				<a class="logo">AIR CHEFS</a>
				
				
				</nav>
			</header>
<div id="heading" ><h1>ORDERS</h1> 
</div>



<body class="is-preload" ><link rel="stylesheet" type="text/css" href="style.css" >


<div class="table-wrapper"  >
	<table class="alt" style="padding-top: 10px;">	



 			<tr>
 				<td>Orderid</td>
 				<td>Username</td>
 				<td>Price</td>
 				<td>PNR</td>	
 				<td>DeliveryStatus</td>
			</tr>

		
		

<?php
session_start();
include("dbconnect.php");

$sql="select * from orders";
$run=mysqli_query($conn, $sql);

while($res=mysqli_fetch_assoc($run)){
	
echo"	


 			<tr>
 				<td>{$res['orderid']}</td>
 				<td>{$res['username']}</td>
 				<td> &#8377 {$res['price']}</td>
 				<td>  {$res['pnr']}</td>	
 				<td>  {$res['deliverystatus']}</td>
			</tr>

		
		";
}



?>


	</table>
</div>

</form>

<form action="additems.php" method="POST">
<div style="float: left;padding:20px;padding-left: 350px;">	<input  style="text-align: center;" type="text" name="item" placeholder="ITEM NAME"></div>
<div style="float: left;padding:20px;padding-top: 25px;">	<input  style="text-align: center;" type="number" name="price" placeholder="Price"></div>
	 <div style="padding:20px;float: left;">   <button type="submit" class="button_1">ADD ITEMS</button></div>
</form>



</body>
</html>







