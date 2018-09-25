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
			$result = mysqli_query($db,"SELECT * FROM images WHERE id='$id'");
			if(mysqli_num_rows($result) == 1){
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
	Weet je zeker dat je deze foto</p> <img src="<?php echo $imageURL; ?>"  alt="" width="250" height="250" /> <p>wilt verwijderen</p>
									
	
	
	<p>
		<a href="foto_verwijder_verwerk.php?id=<?php echo $id; ?>">Verwijder a niffauw</a>
		<a href="uitlees.php">Scot a niffauw</a>
	</p>
</body>
</html>