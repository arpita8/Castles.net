<?php

include($_SERVER['DOCUMENT_ROOT']."/CastlesMag/main/PHP/config.php");
include($dbConnect);

		//accept input, ensure its not some BS

$usernameIn = secure($_POST['user'], $connection);
$emailIn = secure($_POST['email'], $connection);

			//connection successful
			//store user email in a variable
	$mail = mysqli_query($connection,"SELECT `email` FROM `users_table` WHERE `userName`='$usernameIn' AND `email`='$emailIn'");
	$mail = mysqli_fetch_array($mail);

	if(empty($mail)) header("Location: ".$passwordResetErrorIndex);

	else{

		$mail = $mail[0];
		$mailAddress = $mail;
				$new_pass = uniqid(); //create random string to serve as temporary password
				$new_pass_encoded = password_hash($new_pass, 1); //hash string to store in database
				$message = 'Hello. '."<br>".' Your new temporary password is '.$new_pass.'. Please change it as soon as possible.';
				$message .="<br><br>".'Thank you,'."<br>".'Castles Magazine';
				$subject = 'Castles Password Reset';

				//set up PHPMailer, include actual mailing file
				include($mailIndex.'/supportMailer.php');

				mysqli_query($connection, "UPDATE `users_table` SET `password` = '$new_pass_encoded' WHERE `users_table`.`userName` = '$usernameIn'");
				mysqli_close($connection);

				header("Location: ".$passwordResetSuccessIndex);
			}

?>
