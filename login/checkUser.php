<?php


include($_SERVER['DOCUMENT_ROOT']."/CastlesMag/main/PHP/config.php");
include($dbConnect);

		//accept input, ensure its not some BS

$usernameIn = secure($_POST['user'], $connection);
$passwordIn = secure($_POST['pass'], $connection);

$ret = mysqli_query($connection,"SELECT * FROM `users_table` WHERE `userName`='$usernameIn'");
$to_encode = mysqli_fetch_assoc($ret);

			//fetch actual password

$actual_pass = mysqli_query($connection, "SELECT `password` FROM `users_table` WHERE `userName`='$usernameIn'");
$actual_pass = mysqli_fetch_array($actual_pass);
$actual_pass = $actual_pass[0];

			//compare actual to inputted passwords

$comparison = password_verify($passwordIn, $actual_pass);

			//user doesn't exist, or entered wrong password, redirect to error page
if(empty($to_encode) || !$comparison) header("Location: ".$errorIndex);

			//user exist, continue to dash board, store stuff in $_SESSION
else{ 
				//store user info
	$to_encode = json_encode($to_encode);
	$_SESSION['userInfo'] = $to_encode;
	$_SESSION['userLoggedIn'] = true;
	$_SESSION['password'] = $actual_pass;

				//store listings now so DB connection can be safely closed without losing info
	$listings = mysqli_query($connection, "SELECT * FROM `listings_table`");
	$listingsArray = array();
	$c = 0;
	while($row = mysqli_fetch_assoc($listings)){
		$listingsArray[$c] = $row;
		$c++;
	}
	$listings = json_encode($listingsArray);
	$_SESSION['listings'] = $listings;

				//close connection, head to dashboard
	mysqli_close($connection);
	header("Location: ".$dashboardIndex);
}

?>
