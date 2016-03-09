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
      <?php include 'custom_sidebar.php'; ?>
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


  $("#logout_event").on("click",function(){
   $.ajax({
    type:"post",
    url: "facebook-logout.php",
    beforeSend: function(){
                //TODO: dont know what to do yet
              },
              success:function(msg){
                window.location.replace("../Surveyobi");
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
  header('location: ../Surveyobi');
  } ?>