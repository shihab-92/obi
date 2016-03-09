<?php 
	include 'init.php';

	$email =$_POST['user_email'];
	$name =$_POST['user_name'];
	$password=$_POST['user_password'];
	$type='custom';

	$stmt=$Database->prepare("SELECT user_email FROM users WHERE user_email=?");
	$stmt->bind_param('s',$email);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($mail);
	
	while($stmt->fetch()){
		echo "Email already registered!!";
	}

	if(!($mail)) {
		$stmt2=$Database->prepare("INSERT INTO users (user_email, user_name, user_password,user_type) VALUES (?, ?, ?,?)");
		$stmt2->bind_param('ssss',$email,$name,$password,$type);
		$stmt2->execute();
		echo "successfully registered!!";
		$stmt2->close();
	}

	$stmt->close();
 ?>