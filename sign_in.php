<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>About Me</title>
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
  if (isset($_SESSION[username]) && isset($_SESSION[username]))
  {
      header('Location: customer_information.php');
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
        <li><a href="registration_form.html"><b>Sign Up</b></a></li>
        <li><a href="sign_in.php"><b>Sign In</b></a></li>
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
	<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="validate_signin.php" method="post">
			<h2>Please Sign In</h2>
			<hr>
			<div class="form-group">
				<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" tabindex="3" required>
			</div>
			<div class="form-group">
				<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4" required>
			</div>


			<hr>
			<div class="row">
			<div class="col-xs-12 col-md-6"><a href="registration_form.html" class="btn btn-primary btn-block btn-lg" tabindex="7">Sign Up</a></div>
			<div class="col-xs-12 col-md-6"><input type="submit" value="Sign In" class="btn btn-success btn-block btn-lg"></div>
			</div>
		</form>
	</div>
</div>
</body>

</html>
