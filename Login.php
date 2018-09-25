<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Main menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
	<style>
	
	.w3-bar-block .w3-bar-item {
								padding:20px;
								}
	body {
		background-image: url(background.jpg);
		background-repeat: no-repeat;
		background-size: cover;
	}
		
		div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
		
	.white
		{
			background-color: white;
		}
</style>
<body>

    
<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
	<a href="uitlees.php" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
	<a href="Login.php" onclick="w3_close()" class="w3-bar-item w3-button">Login</a>
	<a href="add_user.php" onclick="w3_close()" class="w3-bar-item w3-button">Registreer</a>
	<a href="#join group" onclick="w3_close()" class="w3-bar-item w3-button">Join group</a>
  	<a href="upload.php" onclick="w3_close()" class="w3-bar-item w3-button">Upload foto</a>
</nav>

    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div><br>
	<?php
	// Als het formulier is verstuurd
	if (isset($_POST['inlog']))
	{
		//Voeg de databaseconnectie toe			users	bands	url  /Back12/Back12_goede/band_uitlees.php	
		require 'dbConfig.php';
		
		//Lees de gegevens uit
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		//Maak de querry
		$opdracht = "SELECT * FROM Twenter_Users
		WHERE Username = '$Username' AND Password = '$Password'";
		//Voer de querry uit en van het resultaat op
		$resultaat = mysqli_query($mysqli, $opdracht);
		//Controleer of het resultaat een rij (users) heeft opgeleverd
		if (mysqli_num_rows($resultaat) > 0)
		{
			//Haal de row het resultaat 
			$row = mysqli_fetch_array($resultaat);
			//Zet de gebruikersnaam en Level in 2 verschillende sessions
			$_SESSION['Username'] = $row['Username'];
			
			$_SESSION['Level'] = $row['Level;'];
			
			
			//Controleer of de gebruiker bestaat en rechten heeft.
			
			if(!isset($_SESSION['Username']))
				
			header("location:login.php");
			
			echo "<p>Hallo $Username, u bent ingelogd.</p>";
			echo "<p><a href='add_group.php'> Ga verder </a></p>";
		}
	
			else
	{
		echo "<p> Gebruikersnaam en/of wachtwoord zijn onjuist.</p>";
		echo "<p><a href='Login.php'> Probeer opnieuw</a></p>";
		//echo mysqli_error($mysqli);  // tijdelijk
			
			
		}
	}
	//Als het formulier niet is verstuurd:
	else
	{
		?>
		<h2> LOG IN:</h2>
	<form method="post" action="">
		<table border="0">
			<tr>
			<td>Username</td>
			<td><input type="text" name="Username"</td>
			</tr>
			<tr>
			<td>Password</td>
			<td><input type="password" name="Password"</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td><input type=submit name="inlog" value="LOG IN"</td>
			</tr>	
		</table>
	</form>
	<?php
	}
	?>
	<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>