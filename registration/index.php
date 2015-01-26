<html>
<head>
<script type="text/javascript">
</script>

<script src="./jquery-1.11.2.js">
</script>
<script>

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

REGISTRATION FORM:

<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">

<table>

<tr id="las"><th>Register as:</th><td><select name="access_level" id="access_level" >
 <option value="0">- Select -</option>
  <option value="1" id="PARTICIPANT">PARTICIPANT</option>
  <option value="2" id="VISITOR">VISITOR</option></select></td></tr>
  
<tr id="fn"><th>Name:</th><td><input type="text" id="name" name="name"/></td></tr>
<tr id="em"><th>Email:</th><td><input type="email" id="email" name="email"/></td></tr>
<tr id="pd"><th>Password:</th><td><input type="password" id="password" name="password"/></td></tr>
<tr id="cpd"><th>Confirm Password:</th><td><input type="password" id="cpassword" name="cpassword"/></td></tr>
<tr id="gen"><th>Gender:</th><td><select name="gender" id="gender" >
 <option value=0>- Select -</option>
  <option value="Male" id="Male">Male</option>
  <option value="Female" id="Female" >Female</option></select></td></tr>
<tr id="colg"><th>Institute:</th><td><input type="text" name="colg" id="colg" ></td></tr>
<tr id="location"><th>Current Location</th><td><input type="text" name="location" id="location" ></td></tr>
  
<tr id="mbno"><th>Mobile Number:</th><td><input type="number" min="10" id="phno" name="phno"/></td></tr>

</table>
<input type="submit" value="Register"/><input type="reset" value="Clear"/>

</form>
</body>