<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
	<form action="verwerk.php" method="post" enctype="multipart/form-data">
    Select Image Files to Upload:
    <input type="file" accept= image/* name="files[]" multiple >
    <input type="submit" name="submit" multiple  value="UPLOAD">
</form>
	<?php
// Include the database configuration file
include_once 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY id DESC");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?> 
	
  <a href="foto-uitlees.php">Zie hier alle foto's!</a>  
</body>
</html>
	