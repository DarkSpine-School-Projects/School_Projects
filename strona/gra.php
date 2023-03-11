<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>filmy</title>
    <link rel="stylesheet" href="./wyglad.css">
</head>

<body>

    <img src="lol.jpg">
    <?php

	echo "<p><h3>Witaj ".$_SESSION['user'].'!</span> [ <a href="logout.php">Wyloguj się!]</h3></a> </p>';
	echo "<p><h3><b>E-mail</b>: ".$_SESSION['email'];
	echo "<br /><b>Dni premium</b>: ".$_SESSION['dnipremium']."</h3></p>";
	
	echo "<p><h5>Najpopularniejsze filmy </h5></p>";
	echo "<br><br><br>";
	echo "
	<div class=\"movie-flex\">

		<p class=\"content-flex\">
			<h7><b>film akcji</b>: ".$_SESSION['film akcji']."</h7>
			<img class=\"img-view\" src=\"https://marketplace.canva.com/EAE-xnqWvJk/1/0/1600w/canva-retro-smoke-and-round-light-desktop-wallpapers-JLofAI27pCg.jpg \">
		</p>
		<br>
		
		<p class=\"content-flex\">
			<h7><b>horror</b>: ".$_SESSION['horror']."</h7>
			<img class=\"img-view\" src=\"https://images5.alphacoders.com/112/1123013.jpg\">
		</p>
		<br>

		<p class=\"content-flex\">
			<h8><b>komedia</b>: ".$_SESSION['komedia']."</h8>
			<img class=\"img-view\" src=\"https://wallpaperaccess.com/full/109676.jpg \">
		</p>
	
	</div>";

	
?>

</body>

</html>