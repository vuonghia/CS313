<!DOCTYPE html>

<html>
<head>
	<title>Item Information</title>
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
      <a class="navbar-brand" href="project.php"><b>Jason's Store</b></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="aboutme.html"><b>About Me</b></a></li>
        <li><a href="assignments.html"><b>My Assignments</b></a></li>
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

<div class="jumbotron" style="background-image: url(mario_wall.jpg)">
	<header>
		<div class="container-fluid"><br/><br/><br/><br/><br/><br/><br/><br/></div>
	</header>
</div>

<div class="container" style="margin-left:auto;margin-right:auto">
        <div class="col-md-6">
			<img src="assets/img/items/item18.jpg" 
			     style="outline:#337AB7 solid 1.5px;border:5px solid #FFFFFF;
				        display:block;margin-left:auto;margin-right:auto">
			<br/>
		</div>


        <div class="col-md-6">
			<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-ok"></span><?php echo " Information"?>
                    </h3>
                </div>
				<div class="panel-body">
						<h4>Consol Solar Jar</h4>
						<h5>$25</h5>
						<hr/>
						<p>Light comes in many forms, and it certainly doesn't have to be electric -
						that's something Consol Solar Jars proves with each of its innovative,
						solar-powered mason jar lamps. Ready to charge during the day and cast a
						pleasant glow in the evenings, these mason jar lamps can be filled with anything
						from seashells to flowers as they light up gardens, balconies, and camp sites
						while a rubber seal protects the solar panel from damaging moisture. It's time to
						shine a socially and environmentally responsible light.</p>
						<hr/>
						<h4>Product Detail:</h4>
							Contains Four Solar-Powered LEDs<br/>
							Mason Jar "Shade" <br/>
							Eco-Friendly <br/>
							Mason Jar Is 100% Recyclable <br/>
							Charges During Day <br/>
							Magnetic On/Off Switch <br/>
							Handmade <br/>
							Can Be Filled Even When Light Is On; Filling With Liquid Not <br/>
						<hr/>
						<h4>Shipping:</h4>
						Available on All US States<br/>
						Shipping Price: $4<br/>
						<hr/>
						<button type="button" onclick="location.href='shopping_cart.php'"
								class="btn btn-success pull-right"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>

				</div>
			</div>
		</div>
</div>
</body>
</html>
