<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	//Vraag config bestand op
	
	require "dbConfig.php";
	
	//Lees id
	
	$id = $_GET['id'];
	
	//Nummer?
	
	if (is_numeric($id)){
		
		//verwijder foto
		$result = mysqli_query($db, "DELETE FROM images WHERE id = $id");
		
		//Controlleer
		
		//Tijdelijk
		
		
		if($result){
			
			//terug
			header("Location:uitlees.php");
			exit;
			
		} else{
			echo 'Error asahbi!';
		}
	} else {
		
		//ID IS GEEN NUMMER!?
		
		echo "Onjuist ID.";
		exit;
	}
	var_dump($result);
	?>
</body>
</html>