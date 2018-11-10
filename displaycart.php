<html>

<head> <link rel="stylesheet" href="assets/css/main.css" /></head>
<div  ><link rel="stylesheet" href="style.css">

	<header id="header">
				<a class="logo">AIR CHEFS</a>
				
				
				</nav>
			</header>
<div id="heading" ><h1>MY CART</h1> 
</div>



<body class="is-preload" ><link rel="stylesheet" type="text/css" href="style.css" >


<div class="table-wrapper"  >
	<table class="alt" style="padding-top: 10px;">	
	<tr>
 				<td>Items</td>
 				<td>Quantity</td>
 				<td>Price</td>
			</tr>

<?php
session_start();
include("dbconnect.php");
$name=$_SESSION['user'];
$sql="select * from cart where username='$name'";
$run=mysqli_query($conn, $sql);
$num=mysqli_num_rows($run);

if($num>0){


$id=0;
while($res=mysqli_fetch_assoc($run)){
	$id=$id+$res['price'];
echo"	


 			<tr>
 				<td>{$res['items']}</td>
 				<td>{$res['quantity']}</td>
 				<td> &#8377 {$res['price']}</td>	
			</tr>

		
		";
}
$_SESSION['mon']=$id;




echo"<div align='center'><h2 style='font-family: sans-serif;'>TOTAL:&#8377 $id</h2></div>";

echo"
<form action='pnr.php' method='POST'>
	

	<div style='padding-left: 45%;'>
	<button type='submit' name='submit' >Confirm Order</button>
	</div>



</form>
";
}
else
	{
		echo "<div style='padding:20px;padding-left:40%'><h2>No Items In Cart</h2></div>";
	}


?>


	</table>
</div>
 
<form action='quantity.php' method='POST'>
	

	<div style='padding-left: 45%;'>
	<button type='submit' name='submit' >ADD TO CART</button>
	</div>



</form>


<!--<div align="center"><h2 style="font-family: sans-serif;">TOTAL:<?php echo "&#8377 $id"; ?></h2></div>-->


</body>
</html>







