<?php 
	include 'init.php';

	$email =$_POST['user_email'];
	$name =$_POST['user_name'];
	$type=$_POST['user_type'];

	$stmt=$Database->prepare("SELECT user_email FROM users WHERE user_email=?");
	$stmt->bind_param('s',$email);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($mail);
	
	while($stmt->fetch()){
		$stmt2=$Database->prepare("UPDATE  users  SET user_email=?,user_name=?,user_type=? WHERE user_email=?");
		$stmt2->bind_param('ssss',$email,$name,$type,$email);
		$stmt2->execute();

	$_SESSION['user_name']=$name;
	$_SESSION['user_type']=$type;
	var_dump($_SESSION['user_name']);
	}

	$stmt2=$Database->prepare("INSERT INTO users (user_email, user_name, user_type) VALUES (?, ?, ?)");
	$stmt2->bind_param('sss',$email,$name,$type);
	$stmt2->execute();

	$stmt->close();
	$stmt1->close();
	$stmt2->close();

	$_SESSION['user_name']=$name;
	$_SESSION['user_type']=$type;
	var_dump($_SESSION['user_name']);
 ?>