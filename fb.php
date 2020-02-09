<?php
	$con=mysqli_connect('localhost','root','','feedback');
	if(!$con){
		echo "not connected to server";
	}
	$name=$_POST['username'];
	$text=$_POST['Feedback'];
	$sql="INSERT INTO feedback_table VALUES ('$name','$text')";
	
	if (mysqli_query($con, $sql))
	 	echo "Inserted successfully";
	else
   		echo "Error:".mysqli_error($con);
	mysqli_close($con);
?>