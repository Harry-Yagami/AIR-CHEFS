
<html>

<head> <link rel="stylesheet" href="assets/css/main.css" /></head>
<div  ><link rel="stylesheet" href="style.css">

	<header id="header">
				<a class="logo">AIR CHEFS</a>
				
				
				</nav>
			</header>

<body class="is-preload" ><link rel="stylesheet" type="text/css" href="style.css" >
<div id="heading" ><h1>MENU</h1> 
</div>



<!--<h1 style="text-align: center;"> Menu</h1>-->
<form action="mycart.php" method="POST">
<div class="table-wrapper"  >
	<table class="alt" style="padding-top: 10px;">	
<?php
session_start(); 
//error_reporting(E_ERROR | E_PARSE);
include("dbconnect.php");
$sql="SELECT * FROM fooditems";
$run=mysqli_query($conn,$sql);

$nameid=$_SESSION['name'];
//echo $nameid;


$_SESSION['user']=$nameid;
while($res=mysqli_fetch_assoc($run)){
echo"	


 			<tr>
 				<td>{$res['items']}</td>
 				<td> &#8377 {$res['itemprice']}</td>
			</tr>
		";
}

?>



	</table>
<form>
<div style="float: left;padding:20px;padding-left: 250px ">
<select name="item" placeholder="item" required="">
	 <option value="" disabled selected>FLYBITES</option>
	 <?php
	 include("dbconnect.php");
      $sql="SELECT * FROM fooditems";
       $run=mysqli_query($conn,$sql);

if (mysqli_num_rows($run) > 0) {
		while($res=mysqli_fetch_assoc($run)){

			?><option value="<?php echo $res['items']?>"><?php echo $res['items']?></option>
			<?php


			}  }?>

</select>	</div>
<div style="float: left;padding:20px;">
     <select name="quantity" placeholder="Quantity" required="">
	 <option value="" disabled selected>quantity</option>
	 <option value=1 >1</option>
	 <option value=2>2</option>
	 <option value=3>3</option>
	 <option value=4>4</option>
	 <option value=5>5</option><option value=6>6</option>
</select></div>
</form>


	<div style="padding:20px;float: left;"><button type="submit" name="submit" >Add to Cart</button></div>

<form action="displaycart.php" method="POST">
	

	<div style="padding:20px;float: left"><button type="submit" name="submit" >Display Cart</button></div>



</form>

</div>
</form>



<!--
<div class="footer"><link rel="stylesheet" type="text/css" href="style.css"><footer>
      Flight Bytes, Copyright &copy; 2018
    </footer></div>
    <script src="assets/js/jquery.min.js"></script>
			<script nameid="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

    </div>
	-->
</body>
</html>
