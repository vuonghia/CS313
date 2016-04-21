<!DOCTYPE html>

<html>
<head>
	<title>PHP Form Survey</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Crete+Round">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dosis">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<?php
	session_start();
	if (isset($_SESSION[username]))
	{
		 $username = $_SESSION[username];
		 $lastname = $_SESSION[lastname];
		 $firstname = $_SESSION[firstname];
		 $email = $_SESSION[email];
		 $phone = $_SESSION[phone];
	}
	else
	{
		header('sign_in.php');
	}
?>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="project.php"><b>Geek Store</b></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="index.html"><b>Home</b></a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
	    <li><a class="glyphicon glyphicon-shopping-cart" href="shopping_cart.php"><b><?php echo ' Cart';?></b></a></li>
        <li><a class="glyphicon glyphicon-log-in" href="registration_form.html"><b><?php echo ' Sign Up';?></b></a></li>
				<?php

					if (isset($_SESSION[username]))
					{
						echo '<li><a class="glyphicon glyphicon-user" href="sign_in.php"><b>';
						echo ' ' . $firstname;
						echo '</b></a></li>	';
					} else {
						echo '<li><a class="glyphicon glyphicon-user" href="sign_in.php"><b>';
						echo ' Sign In';
						echo '</b></a></li>	';
					}
				?>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron" style="background-image: url(/assets/img/mario_wall.jpg)">
	<header>
		<div class="container-fluid"><br/><br/><br/><br/><br/><br/><br/><br/></div>
	</header>
</div>

<div class="container">
        <div class="col-md-3">
		 <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-fire"></span><?php echo " Your Settings"?>
                    </h3>
                </div>
       <div class="col-md-1"></div>
		<div class="panel-body">
		    <button type="button" onclick="location.href='assignment2.html'"
			        class="btn btn-primary btn-block">Change Contact Info</button>
		    <button type="button" onclick="location.href='assignment2.html'"
			        class="btn btn-primary btn-block">Change Password</button>
		    <button type="button" onclick="location.href='assignment2.html'"
			        class="btn btn-primary btn-block">Change Addresses</button>
		    <button type="button" onclick="location.href='sign_out.php'"
			        class="btn btn-warning btn-block">Sign Out</button>
		</div>
		</div>
		</div>
        <div class="col-md-8">
				<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-user"></span><?php echo " Hello, " . $firstname . "!"?>
                    </h3>
                </div>
            <div class="panel-body">
                  <ul class="list-group">
                  <li class="list-group-item">
                    <label>
						Username:
						<?php echo " " . $username; ?>
                    </label>
                  </li>
                  <li class="list-group-item">
                    <label>
						Full Name:
						<?php echo " " . $firstname . " " . $lastname; ?>
                    </label>
                  </li>
                  <li class="list-group-item">
                    <label>
						Email Address:
						<?php echo " " . $email; ?>
                    </label>
                  </li>
                  <li class="list-group-item">
                    <label>
						Phone #:
						<?php echo " " . $phone ?>
                    </label>
                  </li>
                  </ul>
                  </div>
            </div>
        </div>
</div>
</body>
</html>
