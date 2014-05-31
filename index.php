<?php
$host = "localhost";
$dbname = "slutprojekt";
$username = "Filip";
$password = "bigblue1";
$dsn      = "mysql:host=$host;dbname=$dbname";
$attr     = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
// har något postats? isf skriv till database
$pdo = new PDO($dsn, $username, $password, $attr);
if(!empty($_POST))	
{
	$_POST = null;
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
	$post    = filter_input(INPUT_POST, 'post', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
	$statement = $pdo->prepare("INSERT INTO comments (date, user_id, post) VALUES (NOW(), :username, :post)");
	$statement->bindParam(":username", $username);
	$statement->bindParam(":post", $post);
	$statement->execute();



	header('Location: Comments.php');
	exit;
}
	
?>
