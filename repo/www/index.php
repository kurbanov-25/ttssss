<?php

include_once("config.php");

$conn = new PDO(
	'mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'].';charset=utf8',
	$config['db']['username'],
	$config['db']['userpass']
);



$query = 'SELECT * FROM users';
$stmt = $conn->prepare($query);
$stmt->execute(array());
echo "Users:<br><ul>";
if ($row = $stmt->fetch())
{
	echo "<li>".$row['id'].")  ".$row['email']."</li>";
}
echo "</ul>";
