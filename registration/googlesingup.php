<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $name = $_GET["name"];
  $email = $_GET["email"];
  $gender = $_GET["gender"];
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
</script>
</head>
<body>

Additional Information:

<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">

<table>


<input type="text" id="name" name="name" value="<?php echo $name?>"/>
<input type="hidden" id="email" name="email" value="<?php echo $email?>"/>
<input type="hidden" id="gender" name="gender" value="<?php echo $gender?>"/>
<tr id="colg"><th>Institute:</th><td><input type="text" name="colg" id="colg" ></td></tr>
<tr id="state"><th>Current Location:</th><td><input type="text" id="state1" name="state"/></td></tr>


<tr id="mbno"><th>Mobile Number:</th><td><input type="number" min="10" id="phno" name="phno"/></td></tr>


</table>
<input type="submit" value="Register"/><input type="reset" value="Clear"/>

</form>
</body>
</html>