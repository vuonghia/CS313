<!DOCTYPE html>
<html>
<body>
<div>

	<h2>Here are the movies in the database</h2><br/>
	<?php
	$dbUser = 'moviePerson';
	$dbPass = 'its a trap';
	$dbHost = '127.0.0.1';
	$dbName = 'movie';

	try
	{
		$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$query = 'SELECT * FROM movie';
		$query1 = "SELECT * FROM movie m JOIN movieActor ma ON m.id = ma.movieId"
					. "JOIN actor a ON a.id=ma.actorId WHERE name =:name";
		foreach ($db->query($query) as $row)
		{
			echo $row['title'] . '<br/>';
		}
	}

	catch (PDOEXCEPTION $ex)
	{
			echo "ERROR" . $ex;
	}
	?>
</div>
</body>
</html>
