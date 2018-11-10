<?php

include("dbconnect.php");
include("login.php");
$mb=$_POST[ 'mbno'];
$user=$_POST["User"];
$password=$_POST["Password"];

$sql="INSERT INTO users(username, password, mobilenumber) VALUES ('$user','$password',$mb)";

$run=mysqli_query($conn,$sql);

if($run){
	echo "Registered";
	
}
else
	{echo "Already Registerd with the username or with same mobile number.";

	
}
	//echo json_encode($run);

?>