<?php
include('connection.php');
$user_id=$_GET['email'];
$name=$_GET['name'];
$gender=$_GET['gender'];

$result=mysql_query("SELECT * FROM new_user WHERE email='".$user_id."'");
echo $result;

if(isset($result)){
	//MAIN PAGE
	session_start();
	$_SESSION['name'] = $_GET['name'];
	header("location:../");
	
}
else{
	header("location: ./code_exec.php?name=".$name."&email=".$user_id."&gender=".$gender."");
}

?>

