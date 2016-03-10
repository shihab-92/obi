<?php include 'init.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Your Events</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/event.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<?php include 'sidebar.php'; ?>
			<div class="col-sm-9">
				<h1 class="Event-user-name"><?php echo $_SESSION['event_name']; ?></h1><br/>
				<div class="row">
					<div class="col-sm-12 question-create">
						<div class="row">
							<div class="col-sm-12">
								<div class="col-sm-3">
									<h2>Question type</h2>
									<p>Choose which type of question to ask your audience.</p>
								</div>
								<div class="col-sm-9 question-padding">
									<div class="set-width">
										<a href="">Multiple choice</a>
									</div>
									<div class="set-width">
										<a href="">Word cloud</a>
									</div>
									<div class="set-width">
										<a href="">Scales</a>
									</div>
									<div class="set-width">
										<a href="">Open ended</a>
									</div>
									<div class="set-width">
										<a href="">100 points</a>
									</div>
									<div class="set-width">
										<a href="">2 by 2 Matrix</a>
									</div>
									<div class="set-width">
										<a href="">Who will win?</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="col-sm-3">
									<h2>Your question</h2>
									<p>Enter the question you want to ask your audience (max 100 characters).</p>
								</div>
								<div class="col-sm-9 question-padding">
									<input type="text" class="form-control" placeholder="The question you want to ask"></input>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="col-sm-3">
									<h2>Alternatives</h2>
									<p>Enter the alternatives that your audience can vote on.</p>
								</div>
								<div class="col-sm-9 question-padding">
									<input type="text" class="form-control" placeholder="Alternative1"></input>
									<input type="text" class="form-control" placeholder="Alternative2"></input>
									<input type="button" class="form-control" value="Add alternative"></input>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
		</div>
	</div>
  <!-- <input type="button" value="logout" onclick="logout();"></input> -->
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
      //testAPI(response);
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      console.log("not authorized!!");
      window.location.replace("../surveyobi");
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      console.log("Please log in!!!!");
      window.location.replace("../surveyobi");
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


  function logout(){
    FB.logout(function(response) {
      console.log("successfully logged out!!");
    });
    $.ajax({
      type:"post",
      url: "facebook-logout.php",
      beforeSend: function(){
                //TODO: dont know what to do yet
            },
            success:function(msg){
                window.location.replace("/");
            },
            error: function(){
                alert("failure");
            }

        }); 
  }
</script>
</body>
</html>

