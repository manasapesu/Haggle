<?php

	$con=mysqli_connect("localhost","root","","products");
if(!$con)
	die("Error: " . mysql_connect_error());
$cname=$_REQUEST["SellerName"];
$email=$_REQUEST["Email"];
$pname=$_REQUEST["ItemName"];
$price=$_REQUEST["Price"];
$pimage=$_REQUEST["fileToUpload"];
$start=$_REQUEST["StartTime"];
$end=$_REQUEST["EndTime"];

//$cpassword=$_REQUEST["cfrm_psd"];
$sql="insert into product_details value ('$cname','$email','$pname','$pimage','$start','$end','$price')";
$result=$con->query($sql);
if(!$result)
	die("Error in sql query");
if($result)
{
	header("Location:http://localhost/haggle/sell.html");
}
$con->close();

?>