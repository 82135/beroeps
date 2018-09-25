<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
// Include the database configuration file
include_once 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY id DESC");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>"  alt="" width="250" height="250" />
	<a href="<?php echo $imageURL; ?>">Download</a>
	<?php echo "<a href='foto_verwijder.php?id=" . $row['id'] . "';>Verwijder</a>"?>
	<a href='foto_verwijder_alles.php'>Verwijder alles</a>"

<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?> 
	<a href="index.php">Upload hier een foto!</a>
</body>
</html>