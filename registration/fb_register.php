<?php
define('FACEBOOK_APP_ID', '205252789663021'); // Place your App Id here
define('FACEBOOK_SECRET', 'b9094280f980302e774ffd36b74b4104'); // Place your App Secret Here

// No need to change the function body
function parse_signed_request($signed_request, $secret) 
{
list($encoded_sig, $payload) = explode('.', $signed_request, 2);
// decode the data
$sig = base64_url_decode($encoded_sig);
$data = json_decode(base64_url_decode($payload), true);
if (strtoupper($data['algorithm']) !== 'HMAC-SHA256')
{
error_log('Unknown algorithm. Expected HMAC-SHA256');
return null;
}

// check sig
$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
if ($sig !== $expected_sig) 
{
error_log('Bad Signed JSON signature!');
return null;
}
return $data;
}
function base64_url_decode($input) 
{
return base64_decode(strtr($input, '-_', '+/'));
}
if ($_REQUEST) 
{
$response = parse_signed_request($_REQUEST['signed_request'],
FACEBOOK_SECRET);

$name = $response["registration"]["name"];
$email = $response["registration"]["email"];
$gender = $response["registration"]["gender"];
$location = $response["registration"]["location"];
$college = $response["registration"]["college"];
$mobile = $response["registration"]["mobile"];



}
?>

<html>
<head>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["access_level"].value;
var b=document.forms["reg"]["name"].value;
var j=document.forms["reg"]["email"].value;
var c=document.forms["reg"]["password"].value;
var d=document.forms["reg"]["cpassword"].value;
var e=document.forms["reg"]["gender"].value;
var f=document.forms["reg"]["colg"].value;
var g=document.forms["reg"]["state"].value;
var h=document.forms["reg"]["phno"].value;
var i=document.forms["reg"]["category"].value;
if ((a=="0") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (h==null || i=="") && i==null || i=="")
  {
  alert("All Field must be filled out");
  return false;
  }
if (a=="0")
  {
  alert("Select your Registration Access Type");
  return false;
  }
if (b==null || b=="")
  {
  alert("Name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Password name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("Confirm Password must be filled out");
  return false;
  }
if (e==0)
  {
  alert("Gender must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("College must be filled out");
  return false;
  }
if (g==0)
  {
  alert("Location must be filled out");
  return false;
  }
if (h==null || h=="")
  {
  alert("Contact No must be filled out");
  return false;
  }
if (i==0)
  {
  alert("Category must be filled out");
  return false;
  }
if (j==null || j=="")
  {
  alert("Email must be filled out");
  return false;
  }
if (c!=d)
  {
  alert("Both Passwords are not same");
  return false;
  }
  
    var atpos = j.indexOf("@");
    var dotpos = j.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	
	var numbers = /^[0-9]+$/;  
    if(!(h.value.match(numbers))){
		 alert('Please input numeric characters only in mobile nos');  
         return false;  
	}	  
	  
}
function submit() {
  document.forms["reg"].submit();
}

</script>
</head>
<body onload="submit()">


<div style="visibility:hidden">
<form name="reg" id="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">

<table>


<input type="text" id="name" name="name" value="<?php echo $name?>"/>
<input type="hidden" id="email" name="email" value="<?php echo $email?>"/>
<input type="hidden" id="gender" name="gender" value="<?php echo $gender?>"/>
<tr id="colg"><<td><input type="text" name="colg" id="colg" value="<?php echo $college?>"></td></tr>
<input type="hidden" name="state" id="location" value="<?php echo $location?>"></td></tr>


<tr id="mbno"><td><input type="text" min="10" id="phno" name="phno" value="<?php echo $mobile?>"/></td></tr>

</table>
<input type="submit" value="Register"/><input type="reset" value="Clear"/>

</form>
</div>
</body>
</html>
