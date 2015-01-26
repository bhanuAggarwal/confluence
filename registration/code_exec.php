<?php
session_start();
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$colg=$_POST['colg'];
$state=$_POST['state'];
$mobile=$_POST['phno'];
$result = mysql_query("INSERT INTO new_user(name, email,password, college, state, mobile)VALUES('".$name."', '".$email."', '".$password."', '".$colg."', '".$state."', '".$mobile."')");

//echo "INSERT INTO new_user(name, email,password, college, state, mobile)VALUES('".$name."', '".$email."', '".$password."', '".$colg."', '".$state."', '".$mobile."'')";

$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
if($result)
	header("location: ../");
else
	echo "Can't Execute Query";
	mysql_close($con);
?>