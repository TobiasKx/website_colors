<?php session_start(); ?>
<!DOCTYPE html>
<html>
 
<head>
	<link rel="stylesheet" href="style.css">
    <title>
        Colors_Homepage
    </title>
</head>
 
<body>
	<div class ="header">
		<?php 
			if( !isset($_SESSION["name"])){
				echo "<h1>Welcome to Colors! Please register</h1>";
			}
			else{
				echo "Welcome".$_SESSION["name"];
				
			}
		?>
		
	</div>
	<div class = "body">
		<form action="../backend/register.php" method="post">
		<label for "name">Name:</label>
		<input type="text" name="name"><br>
		<label for "password">Password:</label>
		<input type="text" name="password"><br>
		<label for "password2">Repeat Password:</label>
		<input type="text" name="password2"><br>
		<label for "fav_color">Favourite Color</label>
		<select name = "fav_color">
			<option value = "red"> Red</option>
			<option value = "blue"> Blue</option>
			<option value = "yellow"> Yellow</option>
		</select><br>
	</div>
	<div class = "footer">
		<input type="submit">
	</div>
</form>
</body>
 
</html>
