<?php

$host="localhost";
$user="root";
$password="";
$db="login";

$conn=mysqli_connect($host,$user,$password,$db);
if(!$conn)
{
	die("my sql conn failed".mysqli_connect_error());
}







	$uname=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * from users where username='".$uname."'AND password='".$password."' limit 1";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($result);

	if ($row==1) {
		
		header('location:project.html');
		exit();
		# code...
	}
	else
	{
		header('location:admin.php');
		
	}



?>