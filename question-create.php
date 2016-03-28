<?php include 'init.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Your Events</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/event.css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<?php 
      if($_SESSION['user_type'] =='custom'){
        include 'custom_sidebar.php'; 
      }else{
        include 'sidebar.php'; 
      }
      ?>

      <?php 
            $stmt=$Database->prepare("SELECT  survey_name FROM survey where survey_id=?");
            $stmt->bind_param('i',$_REQUEST['event_id']);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($survey_name);
            $stmt->fetch();
            $stmt->close();
            ?>
			<div class="col-sm-9">
				<h1 class="Event-user-name"><?php echo $survey_name; ?></h1><br/>
				<div class="row">
					<div class="col-sm-12 question-create">
						<div class="row">
							<div class="col-sm-12">
								<div class="col-sm-3">
									<h2>Question type</h2>
									<p>Choose which type of question to ask your audience.</p>
								</div>
								<div class="col-sm-9 question-padding">
									<div class="set-width" id="multiple_choice">
										<p>Multiple choice</p>
									</div>
									<div class="set-width" id="word_cloud">
										<p>Word cloud</p>
									</div>
									<div class="set-width" id="scales">
										<p>Scales</p>
									</div>
									<div class="set-width" id="open_ended">
										<p>Open ended</a>
									</div>
									<div class="set-width" id="100_points">
										<p>100 points</p>
									</div>
									<div class="set-width" id="matrix">
										<p >2 by 2 Matrix</p>
									</div>
									<div class="set-width" id="who_win">
										<p >Who will win?</p>
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
						<div class="row" id="changeable-content">
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
                				<input type="button" class="btn btn-success pull-right" value="Save"></input>
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
  <script type="text/javascript" src="js/question_create.js"></script>
</body>
</html>

