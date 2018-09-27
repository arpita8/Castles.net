<?php
include($_SERVER['DOCUMENT_ROOT']."/CastlesMag/main/PHP/config.php");
include($dbConnect);

$id = $_POST['id'];
$id = secure($id, $connection);
$query = mysqli_query($connection, "SELECT * FROM `listings_table` WHERE `id`='$id'");
//$query = mysqli_query($connection, "SELECT `url` FROM `listings_table` WHERE `id`='$id'");
$query = mysqli_num_rows($query);

if($query) $_SESSION['id'] = $id; //unnecessary
	
echo $query;
mysqli_close($connection);
exit();

?>