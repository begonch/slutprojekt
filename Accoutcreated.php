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
    <h2 style="color:white">Skapa ditt konto här</h2>

		<form action="registered.php" method="post" style="color:white">
			Användarnamn:<input type="text" name="Name"><br>
			<input type="submit" value="Post">
		</form>

    <h1 style="color:white">Ditt konto har skapats!</h1>

    <img id="nti" src="nti.png">


	</body>



</html>
