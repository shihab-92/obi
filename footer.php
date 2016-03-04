<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>

  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      //console.log(response);
      console.log("connected");
            FB.api('/me','get',{fields: 'id,name,gender,email'}, function(response) {
                user_email = response.email; //get user email

                //console.log(user_email,response.gender,response.name);
                console.log("logged in!!");
                // you can store this data into your database
                var email =user_email;
                var name =response.name;
                var type ="facbook";
                $.ajax({
                  type:"post",
                  url: "facebook-login.php",
                  data:{
                    "user_email":email,
                    "user_name": name,
                    "user_type": type
                  },
                  beforeSend: function(){
                //TODO: dont know what to do yet
              },
              success:function(msg){
                window.location.replace("./Events.php");
              },
              error: function(){
                alert("failure");
              }

            });             
        });
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      console.log("not authorized!!");
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      console.log("Please log in!!!!");
    }
  }
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '513840392122166',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

};

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  
  function login(){
    FB.login(function(response) {

      if (response.authResponse) {
        console.log('Welcome!  Fetching your information.... ');
            //console.log(response); // dump complete info
            access_token = response.authResponse.accessToken; //get access token
            user_id = response.authResponse.userID; //get FB UID

            FB.api('/me','get',{fields: 'id,name,gender,email'}, function(response) {
                user_email = response.email; //get user email

                //console.log(user_email,response.gender,response.name);
                console.log("logged in!!");
                // you can store this data into your database
                var email =user_email;
                var name =response.name;
                var type ="facbook";
                $.ajax({
                  type:"post",
                  url: "facebook-login.php",
                  data:{
                    "user_email":email,
                    "user_name": name,
                    "user_type": type
                  },
                  beforeSend: function(){
                //TODO: dont know what to do yet
              },
              success:function(msg){
                window.location.replace("./Events.php");
              },
              error: function(){
                alert("failure");
              }

            });             
        });

          } else {
            //user hit cancel button
            console.log('User cancelled login or did not fully authorize.');

          }
        }, {
          scope: 'public_profile,email,user_friends'
        });
  }
</script>
</body>
</html>