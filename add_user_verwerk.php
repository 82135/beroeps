
---<!doctype html>   
<html>
<head>
<meta charset="UTF-8">
<title>Toevoeging verwerken</title>
</head>

<body>	
	
	
	
	
	<?php
	error_reporting(E_ALL);
	ini_set("error_reporting", E_ALL);
	require 'config.php';
	
	echo "hallo2";
	
	$Name = $_POST['Name'];
	$LastName = $_POST['LastName'];
	$Username = $_POST['Username'];	
	$Password = $_POST['Password'];
	//$Email = $_POST['Email'];
	$Email = test_input($_POST["Email"]);
if (!filter_var($eEail, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid E-mail format"; 
}

	$query = "INSERT INTO Twenter_Users
			  VALUES (NULL, '$Name', '$LastName', '$Username', '$Password', '$Email', 'NULL')";
	//Tijdelijk
	//echo $query;
	
	if(mysqli_query($mysqli, $query))
	{
		echo "<p>Je Account is aangemaakt! Welkom $Name!</p>";
	}
	
	else
	{
	 echo "<p>FOUT bij toevoegen.</p>";
	}
	
	
	?>
	
	<a href="add_user.php">Terug</a>
	
</body>
</html>