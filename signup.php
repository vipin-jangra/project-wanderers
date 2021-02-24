<?php
session_start();
$_SESSION['message']='';

$host="localhost";
$user="root";
$password="";
$db="login";

$conn=mysqli_connect($host,$user,$password,$db);

if ($_SERVER['REQUEST_METHOD']=='POST') {

	IF($_POST['password']==$_POST['repassword'])
	{

		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$password=$_POST['password'];
		$username=$_POST['usename'];

		$sql="insert into signup (firstname,lastname,password,username)"."values('$firstname','$lastname','$password','$username')";
		$query=mysqli_query($conn,$sql);
		if($query==1)
		{
			$insert="insert into users (username,password)"."values('$username','$password')";
			$query=mysqli_query($conn,$insert);
			if ($query==1) {
				header("location:signup seccessfull.html");

				# code...
			}
		}
		


	}


	
	# code...
}




?>