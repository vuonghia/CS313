<?php

   	$firstname = $_POST["firstname"];
 	$lastname = $_POST["lastname"];
   	$username = $_POST["username"];
   	$email = $_POST["email"];
   	$phone = $_POST["phone"];
   	$password = $_POST["password"];

	require("load_db.php");
	require 'password.php';
	$passwordHash = password_hash($password, PASSWORD_DEFAULT);
	
	// if(isset($_POST['firstname']))
	// {
		// insertUserData();  // call to a function
	// }
	
	// function validateUserName($username)
	// {	
		// $db = loadDatabase();
		// $valid_username = true;
		// $group_username = $db->query('select username from customer');
		// foreach($group_username as $row)
		// {
			// if($username == $row[username])
			// {
				// $valid_username = false;
			// }
		// }
		// return $valid_username;
	// }

	// function insertUserData()
	// {
		$db = loadDatabase();

	  	// if (validateUserName($username))
	  	// {
	  		echo "valid";
		  	$query = 'INSERT INTO customer 
			(lastname, firstname, username, email, phone, password)		  
					  VALUES
			(:lastname, :firstname, :username, :email, :phone, :password)';
			
			$statement = $db->prepare($query);
			$statement->bindValue(':lastname', $lastname);
			$statement->bindValue(':firstname', $firstname);
			$statement->bindValue(':username', $username);
			$statement->bindValue(':email', $email);
			$statement->bindValue(':phone', $phone);
			$statement->bindValue(':password', $passwordHash);
			$statement->execute();
			$user_id = $db->lastInsertId();
		// }
	// }
	header("Location: sign_in.php");
	die();
?>