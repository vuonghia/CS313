<!DOCTYPE html>

<html>
<head>
	<title>Shopping Cart</title>
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
        <div class="col-md-8">
			<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-shopping-cart"></span><?php echo " Item"?>
                    </h3>
                </div>
				<div class="panel-body">

					        <div class="col-md-3">
								<img src="/assets/img/Consol_Solar_Jar.jpg" style="width:120px;height:120px">
							</div>
							<div class="col-md-9">
								<h4>Consol Solar Jar</h4>
								<h5>$25</h5>
								<hr/>
								<p>Light comes in many forms, and it certainly doesn't have to be
									electric - that's something Consol Solar Jars proves with each
									of its innovative, solar-powered mason jar lamps. Ready to charge
									during the day and cast a pleasant glow in the evening ...</p>
								<hr/>

								<div class="col-lg-3 pull-right">
								<input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity" tabindex="4" required>
								</div>
							</div>

				</div>
            </div>
        </div>

        <div class="col-md-4">
			<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-ok"></span><?php echo " Your Settings"?>
                    </h3>
                </div>
				<div class="panel-body">
					<div class="col-md-10">Item: </div>
					<div class="col-md-2">$50</div>
					<div class="col-md-10">Tax: </div>
					<div class="col-md-2">$4</div>
					<div class="col-md-10">Shipping: </div>
					<div class="col-md-2">$6</div>
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<div class="pull-right"><hr/>Total: $60</div>
					</div>

					<div class="col-md-12">
						<br/>
						<button type="button" onclick="location.href='assignment2.html'"
								class="btn btn-success btn-block">Check Out</button>
					</div>
				</div>
			</div>
		</div>
</div>
</body>
</html>
