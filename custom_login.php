<?php 
	include 'init.php';

	$email =$_POST['user_email'];
	$password=$_POST['user_password'];
	$type='custom';

	$stmt=$Database->prepare("SELECT user_name FROM users WHERE user_email=? And user_type=? AND user_password=?");
	$stmt->bind_param('sss',$email,$type,$password);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($user_name);
	
	while($stmt->fetch()){
		$_SESSION['user_name']=$user_name;
		$_SESSION['user_type']=$type;
		echo "success";
	}
	$stmt->close();
 ?>