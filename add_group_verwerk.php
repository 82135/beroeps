<html>
<body> 
	

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


//Als de gebruiker alleen 'kijk-rechten' heeft

// en geen gebruikers mag toevoegen:

	

?>
	
	<?php
	//Voeg het bestand config.php toe:
	require 'dbConfig.php'; 
	//Lees het formulier uit
	$GroupName = $_POST['GroupName'];
	$Theme = $_POST['Theme'];
	

	
	//Maak de Query
	$query = "INSERT INTO Twenter_Groups
	         VALUES (NULL, '$GroupName', '$Theme', 1, 1)";
	
	//echo $query;
//Als de opdracht goed wordt uitgevoerd:
if (mysqli_query($mysqli, $query))
{
   echo "<p>De groep: $GroupName is toegevoegd.</p>";

}
//Anders
	else
	{
		echo "<p>FOUT bij toevoegen.</p>";
	    echo mysqli_error($mysqli);  //LET OP: tijdelijk toevoegen
	}
	
	?>


</body>
</html>
