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
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html"><b>Jasonville</b></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html"><b>Home</b></a></li>
        <li><a href="aboutme.html"><b>About Me</b></a></li>
        <li><a href="assignments.html"><b>My Assignments</b></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron" style="background-image: url(jasonville2.jpg)">
<header>
  <div class="container-fluid">
<h1 style="font-family: 'Shadows Into Light', serif">Welcome to JASONVILLE</h1>
<p style="font-family: 'Shadows Into Light', serif">This website is for my CS313 project. I will try my best to make it look nice and professional. I hope you will like it.</p>
</header>
 </div>
</div>

<div class="container">
	<div class="row">
	  <div class="col-md-3">
	  </div>

	  <div class="col-md-6" style="font-family: 'Dosis', serif">
	  <div style="text-align:center;background-color:#FA773F;
		          padding: 20px 20px 20px 20px;
				  font-family: 'Dosis', serif" class="img-rounded"> 
		<h3><b>My Survey</b></h3>
			Welcome <?php echo $_POST["name"]; ?><br>
			Your email address is: <?php echo $_POST["email"]; ?>
		</div>
	  </div>
	  
	  <div class="col-md-3">
	  </div>
	</div>
	
</div>

<footer>
	<br/><br/><hr/>
	<div style="text-align:center; 
				text-shadow: 5px 5px 5px #888888;
				font-weight: bold">
		Posted by: Jason Vuong<br/>
		2015 Copyright Jasonville, Inc. All rights reserved.
		<br/>
		</a>
	</div>
</footer>
</body>
</html>
