<?php

$host = "localhost";
$dbname = "slutprojekt";
$username = "Filip";
$password = "bigblue1";
$dsn      = "mysql:host=$host;dbname=$dbname";
$attr     = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

$pdo = new PDO($dsn, $username, $password, $attr);

if(!empty($_POST))	
{
	$_POST = null;
	$username    = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
	$statement = $pdo->prepare("INSERT INTO users (username) VALUES (:post)");
	$statement->bindParam(":post", $username);
	$statement->execute();

	header('Location: Accoutcreated.php');
	exit;
}

?>

