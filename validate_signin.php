<?php
   	$inUsername = $_POST["username"];
   	$inPassword = $_POST["password"];
	
	require("load_db.php");
	require 'password.php';
//	$passwordHash = password_hash($password, PASSWORD_DEFAULT);
	
	$db = loadDatabase();
	
	$valid = false;
	$query = $db->query('select username, password, phone, email, lastname, firstname from customer');	
	foreach($query as $row)
	{
		$dbPassword = $row[password];
		if($inUsername == $row[username] && password_verify("$inPassword", $dbPassword))
		{
			$valid = true;	
  			$username = $row[username];
			$lastname = $row[lastname];
			$firstname = $row[firstname];
  			$phone = $row[phone];
  			$email = $row[email];
			break;
		}
	}
	
	if ($valid)
	{
		session_start();
		$_SESSION["username"] = $username;
		$_SESSION["phone"] = $phone;
		$_SESSION["email"] = $email;
		$_SESSION["firstname"] = $firstname;
		$_SESSION["lastname"] = $lastname;
		header("Location: customer_information.php");
		die();
	}
	else
	{
		header("Location: sign_in.php");
		return $valid;
		die();
	}
?>
