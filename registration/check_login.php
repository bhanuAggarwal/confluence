<?php

include('connection.php');
$user_id=$_GET['useremail'];
//$user_id="abc";
$result=mysql_query("SELECT name FROM new_user WHERE email=".$user_id."");
echo "SELECT name FROM new_user WHERE email=".$user_id."";

echo $result;

while($data = mysql_fetch_array($result)) {
	echo $data['name'];
}

echo $data;
echo $data['name'];
$blank = "";
echo strcmp($data['name'],$blank);

if(strcmp($data['name'],$blank) == 0){
	header("location: ./registration.php");

}
else{
	session_start();
	$_SESSION['name'] = $data['name'];
        echo $data['name'];
        header("location:../");
	
}

?>
