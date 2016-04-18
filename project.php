<!DOCTYPE html>
<html>
<head>
<title>Welcome to Jason's Store</title>
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
<div style="background-image: url(277997.jpg)">

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

<style>
  .thumbnail.with-caption {
    display: inline-block;
	background-image: url("assets/img/bar.jpg");
  }
  .thumbnail.with-caption p {
//    margin: 0;
    padding-top: 0.5em;
  }
  .thumbnail.with-caption small:before {
    content: '\2014 \00A0';
  }
  .thumbnail.with-caption small {
    width: 100%;
    text-align: right;
    display: inline-block;
    color: #999;
  }

a:link {
    color: #FFFFFF;
}
a:visited {
    color: #FFFFFF;
}
a:hover {
    color: #3D6BFF;
}
</style>

<div class="container" >
	<div class="row" style="margin-left:auto;margin-right:auto;width:80%">
<?php
	for ($i = 0; $i < sizeof($nameArray); $i++)
	{
	echo '<div class="col-lg-6 col-sm-6 col-xs-12">
			<a class="thumbnail with-caption" href="item_information.php">
				<img src="/assets/img/item' . $idArray[$i] . '.jpg">
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

<!-- Grid View of Items -->
<!-- <div class="container" >
  <div class="row" style="margin-left:auto;margin-right:auto;width:80%">
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
            <img src="/assets/img/tnt_royal_retro.jpg">
			<h4>TNT Royal Retro</h4>
			<h6>$18,000</h6>
        </a>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
            <img src="/assets/img/air_square.jpg">
			<h4>Air Square</h4>
			<h6>$130</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
            <img src="/assets/img/ghost_drone.jpg">
			<h4>Ghost Drone</h4>
			<h6>$700</h6>
        </a>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/uriana_iphone_glass_holder.jpg">
			<h4>Uriana iPhone Glass Holder</h4>
			<h6>$120</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/LZR_980.jpg">
			<h4>LZR 980 Headphone</h4>
			<h6>$300</h6>
        </a>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/IC200B_PICO_Projector.jpg">
			<h4>IC200B PICO Projector</h4>
			<h6>$300</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/shirt8.jpg">
			<h4>Ah! Green Shirt</h4>
			<h6>$20</h6>
        </a>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/shirt9.jpg">
			<h4>Loading Sarcasm Shirt</h4>
			<h6>$20</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/Smart_Plane.jpg">
			<h4>Smart Plane</h4>
			<h6>$50</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/Consol_Solar_Jar.jpg">
			<h4>Consol Solar Jar</h4>
			<h6>$25</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/LED_Reflective_Belt.jpg">
			<h4>LED Reflective Belt</h4>
			<h6>$25</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/Hover_Bar_iPad.jpg">
			<h4>Hover Bar for iPad</h4>
			<h6>$70</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/Rosewood_Journal.jpg">
			<h4>Rosewood_Journal</h4>
			<h6>$20</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/Glass_Touch_Smart_Keyboard.jpg">
			<h4>Glass Touch Smart Keyboard</h4>
			<h6>$150</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/Lamborghini_Veneno.jpg">
			<h4>Lamborghini Veneno Figure</h4>
			<h6>$100</h6>
        </a><br/><br/>
    </div>
    <div class="col-lg-6 col-sm-6 col-xs-12">
        <a class="thumbnail with-caption" href="item_information.php">
             <img src="/assets/img/Bugatti_EB_Veyron.jpg">
			<h4>Bugatti EB Veyron Figure</h4>
			<h6>$100</h6>
	</a><br/><br/>
    </div>
  </div>
</div> -->

</body>
</html>
