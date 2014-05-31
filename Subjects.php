<?php

$host = "localhost";
$dbname = "slutprojekt";
$username = "Filip";
$password = "bigblue1";
$dsn      = "mysql:host=$host;dbname=$dbname";
$attr     = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

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
<nav id="kursNav">

<ul id="table">



<li><a id="link-matte" href="subject-matte.php" class="Button">Matematik</a>
</li>
<li><a id="link-svenska" href="subject-svenska.php" class="Button">Svenska</a>
</li>
<li><a id="link-fysik" href="subject-fysik.php" class="Button">Fysik</a>
</li>
<li><a id="link-teknik" href="subject-teknik.php" class="Button">Teknik</a>
</li>
<li>
  <a id="link-engelska" href="subject-engelska.php" class="Button">Engelska</a>
</li>
</ul>

</nav>

<div id="container">

  </div>






    <img id="nti" src="nti.png">


	</body>



</html>
