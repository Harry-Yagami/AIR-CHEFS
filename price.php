
<html>
	<head >
	         <link rel="stylesheet" href="assets/css/main.css" />
  		</head>

<body class="is-preload"><link rel="stylesheet" type="text/css" href="style.css" >

<form action="price.php" method="Post">
<div class="table-wrapper" >
	<table class="alt">	
<?php

include("dbconnect.php");
$sql="SELECT * FROM fooditems";
$run=mysqli_query($conn,$sql);

while($res=mysqli_fetch_assoc($run)){
echo"	


 			<tr>
 				<td>{$res['items']}</td>
 				<td> &#8377 {$res['itemprice']}</td>
 				<td><input type='Number' name='quantity' width='5px' min='0' placeholder='Quantity'></td>
			</tr>
		";
}

?>
	</table>
</div>
</form>

<div class="footer"><link rel="stylesheet" type="text/css" href="style.css"><footer>
      Flight Food, Copyright &copy; 2018
    </footer></div>
    <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

    </div>
	
</body>
</html>
