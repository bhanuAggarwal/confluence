function validateForm()

{
var b=document.forms["reg"]["name"].value;
var j=document.forms["reg"]["email"].value;
var c=document.forms["reg"]["password"].value;
var d=document.forms["reg"]["cpassword"].value;
var f=document.forms["reg"]["colg"].value;
var g=document.forms["reg"]["location"].value;
var h=document.forms["reg"]["phno"].value;
if ( (b==null || b=="") && (c==null || c=="") && (d==null || d=="") &&  (f==null || f=="") && (h==null || h==""))
  {
  alert("All Field must be filled out");
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

