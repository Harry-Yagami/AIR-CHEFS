
<html>

<head> <link rel="stylesheet" href="assets/css/main.css" /></head>
<div  ><link rel="stylesheet" href="style.css">

	<header id="header">
				<a class="logo">AIR CHEFS</a>
				
				
				</nav>
			</header>

<body class="is-preload" style="text-align: center;" ><link rel="stylesheet" type="text/css" href="style.css" >
<div id="heading"><h1>
	Enter your PNR
</h1></div>
<?php
session_start();
$pri=$_SESSION['mon'];
$_SESSION['k']=$pri;

//echo $pri;
?>
<div style="background-image: url(kk.jpg);">
<form action="cnforder.php" method="POST">
<div style="float: left;padding:20px;padding-left: 500px;padding-top: 100px;">	<input  style="text-align: center;" type="Number" name="pnr" placeholder="ENTER YOUR PNR HERE"></div>
 <div style="float: left;padding:20px; padding-top: 100px;">   <button type="submit" class="button_1">Submit</button></div>
</form>

</div>

</body>
</div>
</html>