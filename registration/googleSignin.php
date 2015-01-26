
<html>

  <head>
    <!-- Include the API client and Google+ client. -->
    <script src = "https://plus.google.com/js/client:plusone.js"></script>
  </head>

  <body>
    <!-- Container with the Sign-In button. -->
    <div id="gConnect" class="button">
      <button class="g-signin"
          data-scope="email"
          data-clientid="914814977775.apps.googleusercontent.com"
          data-callback="onSignInCallback"
          data-theme="dark"
          data-cookiepolicy="single_host_origin">
		  <font color="blue">
		  Redirect to Google+</font>
      </button>
      <!-- Textarea for outputting data -->
    </div>
 </body>

  <script type="text/javascript">
  /**
   * Handler for the signin callback triggered after the user selects an account.
   */
  function onSignInCallback(resp) {
    gapi.client.load('plus', 'v1', apiClientLoaded);
  }

  /**
   * Sets up an API call after the Google API client loads.
   */
  function apiClientLoaded() {
    gapi.client.plus.people.get({userId: 'me'}).execute(handleEmailResponse);
  }

  /**
   * Response callback for when the API client receives a response.
   *
   * @param resp The API response object with the user email and profile information.
   */
  function handleEmailResponse(resp) {
    var primaryEmail;
    for (var i=0; i < resp.emails.length; i++) {
      primaryEmail = resp.emails[i].value;
    }
	window.location.assign("../registration/check_login_google.php?name="+resp.displayName+"&email="+primaryEmail+"&gender="+resp.gender+"");   
	//window.location.assign("../registration/googlesingup.php?name="+resp.displayName+"&email="+primaryEmail+"&gender="+resp.gender+""); 
  }

  </script>

</html>
