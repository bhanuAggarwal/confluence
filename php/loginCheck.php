<?php
	require_once("database.php");
	session_start();
	$username = $_POST['username'];
	$password = $_POST['pass'];
	
	$sql = "select * from new_user where email ='". $username . "' AND password='". $password ."'";
	
	$result = $db->query($sql);
	
	if($check = mysqli_fetch_array($result)) {
		
		$_SESSION['name'] = $check['name'];
		header("Location:../");
	}
	else {
		header("Location:../register.html");

	}
	
	

?>