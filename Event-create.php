<?php 
	include 'init.php';
	$event_name=$_POST['Event-name'];
	$survey_status ="open";
	$start_date=date("Y-m-d h:i:sa",strtotime("now"));
	$update_date=date("Y-m-d h:i:sa",strtotime("now"));

	$stmt=$Database->prepare("SELECT user_id FROM users WHERE user_name=?");
	$stmt->bind_param('s',$_SESSION['user_name']);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($user_name);
	
	while($stmt->fetch()){
		$stmt1=$Database->prepare("INSERT INTO survey (survey_name, user_id, survey_status,survey_start_date,survey_update_date) VALUES (?, ?, ?, ?, ?)");
		$stmt1->bind_param('sisss',$event_name,$user_name,$survey_status,$start_date,$update_date);
		$stmt1->execute();
		$last_inserted = $Database->insert_id;
	}
	
	$stmt->close();
	$stmt1->close();

	$_SESSION['event_name']=$event_name;
	$data=array('name'=>$user_name,'event'=>$last_inserted);
	echo json_encode($data);
 ?>