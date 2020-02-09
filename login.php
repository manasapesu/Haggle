<?php
$con = mysqli_connect("localhost","root","","haggle");     
if (!$con) 
die("Error: " . mysqli_connect_error());
$un=$_REQUEST["uname"];
 $pwd=$_REQUEST["psw"];
$sql = "select username,password from register where username ='$un' and password ='$pwd'";
$result = $con->query($sql);
    $row=$result->fetch_assoc();
if($row)
{  
  session_start();
  $_SESSION['login_user']= $un; 
 header("Location: http://localhost/haggle/sell.html");
 
}
else{
 header("Location: http://localhost/haggle/not_found.html");
}
$con->close();
?>
