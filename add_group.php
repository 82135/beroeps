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

    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
		 <?php
//start de session

session_start();
//Als de gebruiker NIET is ingelogd
// dan bestaat de session 'Gebruiker' niet:
if(!isset($_SESSION['Username']))
{

//Stuur de gebruiker direct terug naar 'inlog.php'
header("location:Login.php");
}
//Als de gebruiker wel is ingelogd, mag hij verder




?>
	
<h2>Band Toevoegen</h2>

<form method="post" action="add_group_verwerk.php">
	
<!-- Kies Groep naam -->	
  Naam van de Groep:<br>
  <input type="text" name="GroupName" placeholder="(Verplicht)">
  <br>
<!-- Kies Thema -->	
  Thema:<br>
  <input type="text" name="Theme" placeholder="Jungle">
  <br>

	<br>
  <input type="submit" value="Submit">
</form> 


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


