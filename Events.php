<?php 
include 'init.php';
if($_SESSION['user_name'] != ''){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Your Events</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/event.css">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<div class="modal fade" role="dialog" id="event-create-modal">
   <div class="modal-dialog modal-md">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="modal-label">You are Creating <strong>New Event</strong></h4>
         </div>
         <div class="modal-body">
          <form  id="event_modal">
            <div class="form-group">
              <label for="recipient-name" class="control-label">Your Event Name:</label>
              <input type="text" class="form-control" id="Event-name" name="Event-name" >
            </div>
            <div class="modal-footer">
             <input type="button" name="submit" class="btn btn-default" id="submitevent" value="Add" />
             <button type="button" id="cancel" class="btn btn-primary" data-dismiss="modal">Cancel</button>
           </div>
         </form>
       </div>
      </div>
   </div>
</div>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include 'sidebar.php'; ?>
      <div class="col-sm-9">
        <h1 class="Event-user-name">Welcome <?php echo $_SESSION['user_name']; ?>!!</h1><br/>
        <input type="button" class="btn btn-primary custom-create-event" id="create-event-button" value="Create Event"></input><br/>

        <table id="myTable" class="table tablesorter">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Your Events</th>
              <th>Last changed</th>
              <th>Votes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- <input type="button" value="logout" onclick="logout();"></input> -->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
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
      window.location.replace("/");
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      console.log("Please log in!!!!");
      window.location.replace("/");
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
<script>
  $("#create-event-button").on("click",function(){
      $("#event-create-modal").modal('show');
  });
  $("#myTable").tablesorter(); 

  $("#submitevent").on("click",function() {
    $.ajax({
      type:"post",
      url: "Event-create.php",
      data:$("#event_modal").serialize(),
      beforeSend: function(){
                //TODO: dont know what to do yet
              },
              success:function(msg){
                $("#event-create-modal").modal('hide');
                var data=JSON.parse(msg);

               window.location.replace("./question-create.php?uid="+data.name+"&event_id="+data.event);
              },
              error: function(){
                alert("failure");
              }

            });
  });

</script>
</body>
</html>
<?php 

}else{
  header('location: /');
  } ?>