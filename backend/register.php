

<?php
session_start();
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["fav_color"] = $_POST["fav_color"];
	echo "Welcome".$_SESSION["name"];
	header('Location: ../frontend/homepage.php');
	exit();
?>

