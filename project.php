<!DOCTYPE html>
<html>
<head>
<title>Welcome to Jason's Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <!-- PRIJECT STYLESHEET -->
  <link href="/assets/css/project.css" rel="stylesheet" type="text/css" media="all" />

  <!-- GOOGLE FONTS -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Crete+Round">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dosis">
  <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext'>
</head>

<body>
<div style="background-image: url(assets/img/277997.jpg)">

<!-- Navigation Bar -->
<?php
	session_start();
		 $firstname = $_SESSION[firstname];

?>
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

					if ($firstname != NULL)
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

<div class="jumbotron"
     style="background-image: url(assets/img/80088339.jpg);height:700px;width:100%">
<header>
	<div class="container-fluid">
		<br/><br/>
		<h1 style="font-family:'Shadows Into Light' serif;color:white"><br/>Welcome to <br/>Jason's Store</h1>
		<br/><br/>
		<h3 style="font-family:'Shadows Into Light',serif;color:white">
			&nbsp&nbsp&nbspNifty Gadgets for Tech Addicts<br/>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBest Geek Toys on The Web<br/>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCoolest Geek Apparel on The Web
		</h3>
	</div>
</header>
</div>
<?php
try
{
				// foreach ($db->query("SELECT * FROM customer") as $row)
				// {
				// echo "Hello " . $row['firstname']
				// . "<br/>Full name: " . $row['firstname'] . " " . $row['lastname']
				// . "<br/>Email Address: " . $row['email']
				// . "<br/>Password: ********br/>";
				// }
	require ("load_db.php");
	$db = loadDatabase();

	$names = $db->query('SELECT name FROM product');
	$nameArray = array();
	$prices = $db->query('SELECT price FROM product');
	$priceArray = array();
	$reviews = $db->query('SELECT review FROM product');
	$reviewArray = array();
	$ids = $db->query('SELECT photoid FROM product');
	$idArray = array();

	foreach($names as $row)
	{
	  array_push($nameArray, $row['name']);
	}
	foreach($prices as $row)
	{
	  array_push($priceArray, $row['price']);
	}
	foreach($reviews as $row)
	{
	  array_push($reviewArray, $row['review']);
	}
	foreach($ids as $row)
	{
	  array_push($idArray, $row['photoid']);
	}

}
catch (PDOException $ex)
{
	print "Error!: " . $e->getMessage() . "<br/>";
}
?>

<!-- Grid View of Items -->
<div class="container" >
	<div class="row" style="margin-left:auto;margin-right:auto;width:80%">
<?php
	for ($i = 0; $i < sizeof($nameArray); $i++)
	{
	echo '<div class="col-lg-6 col-sm-6 col-xs-12">
			<a class="thumbnail with-caption" href="item_information.php">
				<img src="/assets/img/items/item' . $idArray[$i] . '.jpg">
				<h4>' . $nameArray[$i] . '</h4>
				<h6>$' . $priceArray[$i] . '</h6>
			</a>';
	if ($idArray[$i] % 2 == 0 && $idArray[$i] > 1)
		echo '<br/><br/>';

	echo '</div>';
	}
?>
	</div>
</div>

</body>
</html>
