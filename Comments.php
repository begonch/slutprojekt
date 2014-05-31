<?php

$host = "localhost";
$dbname = "slutprojekt";
$username = "Filip";
$password = "bigblue1";
$dsn      = "mysql:host=$host;dbname=$dbname";
$attr     = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

// skapa pdo
$pdo = new PDO($dsn, $username, $password, $attr);
?>
<!DOCTYPE html>
<html>

<head>

  <title>slutprojekt</title>
  <link type="text/css" rel="stylesheet" href="slutprojekt.css"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



	</head>


	<body background="space.jpg">


    <nav id="navheader">
      <ul>
        <li class="rubrik"><a href="Homepage.php">Hem</a></li>
        <li class="rubrik"><a href="Comments.php">Kommentarer</a></li>
        <li class="rubrik"><a href="Subjects.php">Kurser</a></li>
       
      </ul> 

    </nav>
    <form action="index.php" method="POST">
	<p>
		<label for="username" style="color:white">Användare: </label>
		<select name="username">
			<?php
				foreach ($pdo->query("SELECT * FROM users") as $row)
				{
					echo "<option value=\"{$row['id']}\">{$row['username']}</option>";
				}
			?>
		</select>
	</p>
	<p>
		<label for="post" style="color:white">Skicka kommentar: </label>
		<input type="text" name="post" />
	</p>
	<input type="submit" value="Skicka" />
</form>
<div id="posts">
<?php
if($pdo)

echo "<ul>";
foreach ($pdo->query("SELECT comments.*, users.username FROM comments JOIN users ON comments.user_id=users.id") as $row)
{
	echo "<li>{$row['username']}: {$row['post']}, {$row ['date']}</li>";
}
echo "</ul>";
echo "<hr />";

?>
</div>

		
    <img id="nti" src="nti.png">


	</body>



</html>

