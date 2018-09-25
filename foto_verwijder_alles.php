<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
		<?php 
		//Vraag config bestand op
		require "dbConfig.php";
	
		//Lees id
	
		$id = $_GET['id'];
	$query = $db->query("SELECT * FROM images WHERE id='$id'");
	if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
	$imageURL = 'uploads/'.$row["file_name"];}
	}
		//Nummer?
	
		if (is_numeric($id)){
		
		//verwijder foto
			$result = mysqli_query($db,"DELETE FROM images WHERE id='$id'");
			if(mysqli_num_rows($result)){
				//lees foto uit
				$row = mysqli_fetch_array($result);
			}
			else
			{ echo "Geen Foto gevonden a niffauw";
				exit;

			}
			
		}
		else {
		
		//ID IS GEEN NUMMER!?

			echo "Onjuist ID.";
		exit;
		}
		?>
	</head>
<body>
	<h1>Foto Verwijderen</h1>
	
	
	<p>
		<a href="foto_verwijder_alles_verwerk.php?id=<?php echo $id; ?>">Verwijder a niffauw</a>
		<a href="index.php">Scot a niffauw</a>
	</p>
</body>
</html>