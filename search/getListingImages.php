 <?php
	include($_SERVER['DOCUMENT_ROOT']."/CastlesMag/main/PHP/config.php");
	include($dbConnect);

	$id = $_POST['id'];
	$listing = mysqli_query($connection, "SELECT * FROM `listings_table` WHERE `id`='$id'");
	$listing = mysqli_fetch_assoc($listing);
	$listing = json_encode($listing);
	echo $listing;
	exit();
?>