<?php

include($_SERVER['DOCUMENT_ROOT'].'/CastlesMag/main/PHP/dbConnect.php');
		//accept input, ensure its not some BS

$emailIn = secure($_POST['email'], $connection);

$userName = mysqli_query($connection,"SELECT `userName` FROM `users_table` WHERE `email`='$emailIn'");
$userName = mysqli_fetch_array($userName);

if(empty($userName)) header("Location: ".$userNameIndex);

else{

	$userName = $userName[0];
	$mailAddress = $emailIn;

	$message = 'Hello. '."<br>".' Your username is '.$userName.' .';
	$message .="<br><br>".'Thank you,'."<br>".'Castles Magazine';
	$subject = 'Castles Username Retrieval';

				//set up PHPMailer, include actual mailing file
	include($mailIndex."/supportMailer.php");
	
	mysqli_close($connection);

	header("Location: ".$mainLoginIndex);
}


?>
