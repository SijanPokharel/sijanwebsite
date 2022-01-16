<?php
$name=$_POST['username'];
$email=$_POST['uemail'];
$message=$_POST['msg'];
$request=$_POST['req'];
//create a database connection
$server='localhost';
$username='root';
$dbpassword='';
$dbname='laptop';
$conn=new mysqli($server,$username,$dbpassword,$dbname);
//check connection
if($conn->connect_error)
{
	echo "connection id failed";
}
$sql="INSERT INTO bowler(name,email,request,message)values('$name','$email','$request','$message')";

$result=mysqli_query($conn,$sql);
if(!$result)
{
	echo "data not inserted";
}
else
{
	header("location:success.php");
}
?>