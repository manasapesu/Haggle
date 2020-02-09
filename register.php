<?php
$con=mysqli_connect("localhost","root","","haggle");
if(!$con)
	die("Error: " . mysql_connect_error());
$username=$_REQUEST["uname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["psw"];
//$cpassword=$_REQUEST["cfrm_psd"];
$sql="insert into register value ('$username','$email','$password')";
$result=$con->query($sql);
if(!$result)
	die("Error in sql query");
if($result)
{
	header("Location:http://localhost/haggle/web_project_login.html");
}
$con->close();
?>
