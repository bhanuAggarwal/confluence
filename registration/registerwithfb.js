  window.fbAsyncInit = function() {
  FB.init({
    appId      : '205252789663021',
    status     : false, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  FB.Event.subscribe('auth.authResponseChange', function(response) {
    if (response.status === 'connected') {
    	
    	 $(document).ready(function(){
		    $("#fb_button").hide();
    	});
		
			getEmail();
   //            window.location.assign("../registration/registration.php");        
    } else if (response.status === 'not_authorized') {
      FB.login();
    } else {
      FB.login();
    }
  });
  function getEmail()
  {
	  
     FB.login(function(response) 
     {
    	 
        if (response.authResponse) 
        {
        	
            console.log('Welcome!  Fetching your information.... ');

            FB.api('/me', function(response) 
            {
            	
                user_id = response.email;
               //console.log(response);
               window.location.assign("registration/check_login.php?useremail='"+user_id+"'");    
			  
            });
            
            
        } 
        else 
        {
            alert("error occured during login")
        }
    }); 
  }
 	 
	
  };
  

  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));
