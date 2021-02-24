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
$sql="select * from users";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
 if($row>0){
 	while($row=mysqli_fetch_array($result){
 		echo "<tr><td> <br>";
 		echo $row["id"];
 		echo "</td><td><br>";
 		echo $row["username"];
 		echo "</td><td><br>";
 		echo $row["password"];
 		echo "</td><td><br>";
 	}
 	echo "</table>";
 }
 else {
 	echo "0 result";
 }
 $conn-> close();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			
		</tr>
	</table>

</body>
</html>