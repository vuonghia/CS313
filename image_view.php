<?php
require ("load_db.php");
$db = loadDatabase();

if(isset($_GET['image_id'])) 
{
//	$db->query('SELECT firstname FROM customer');
//	$sql = "SELECT photo FROM product WHERE id=" . $_GET['image_id'];
	$result = $db->query('SELECT photo FROM product WHERE id = 4');
//	$result = mysql_query("$db") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
	$row = mysql_fetch_array($result);
	//header("Content-type: " . $row["imageType"]);
	echo $row["photo"];
	$e1 = $_GET['image_id'];
	echo $e1;
}
?>