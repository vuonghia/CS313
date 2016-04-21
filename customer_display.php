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
        <li class="active"><a href="index.html"><b>Home</b></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron" style="background-image: url(/assets/img/mario_wall.jpg)">
	<header>
		<div class="container-fluid"><br/><br/><br/><br/><br/><br/><br/><br/></div>
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

	$firstnames = $db->query('SELECT firstname FROM customer');
	$firstNameArray = array();
	$lastnames = $db->query('SELECT lastname FROM customer');
	$lastNameArray = array();
	$emails = $db->query('SELECT email FROM customer');
	$emailArray = array();
	$phones = $db->query('SELECT phone FROM customer');
	$phoneArray = array();

	foreach($firstnames as $row)
	{
	  array_push($firstNameArray, $row['firstname']);
	}
	foreach($lastnames as $row)
	{
	  array_push($lastNameArray, $row['lastname']);
	}
	foreach($emails as $row)
	{
	  array_push($emailArray, $row['email']);
	}
	foreach($phones as $row)
	{
	  array_push($phoneArray, $row['phone']);
	}

}
catch (PDOException $ex)
{
	print "Error!: " . $e->getMessage() . "<br/>";
}
?>

<div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-fire"></span>Your Personal Information
                    </h3>
                </div>
		<?php
		for ($i = 0; $i < sizeof($firstNameArray); $i++)
		{
            echo '<div class="panel-body">
                  <ul class="list-group">
                  <li class="list-group-item">
                    <label>
						Full Name:'
						. ' ' . $lastNameArray[$i]
						. ', ' . $firstNameArray[$i]
                 . '</label>
                  </li>
                  <li class="list-group-item">
                    <label>
						Email Address:'
						. ' ' . $emailArray[$i]
                 . '</label>
                  </li>
                  </ul>
                  </div>';
		}
		?>
            </div>
        </div>
        <div class="col-md-3"></div>
</div>
</body>
</html>
