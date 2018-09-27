<?php
// Connection
	$host = "localhost";
		$user = "xfmkwpty_app921";
		$password = "fTLe$,e=}T^e";
		$db = "xfmkwpty_app921";

		$connection = mysqli_connect($host,$user,$password,$db);

$db = mysqli_select_db("Testing_User", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['Name'];
$address = $_POST['Address'];
$gender = $_POST['gender'];
$phone = $_POST['Phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['Password'];

if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysqli_query("insert into Testing_User(Name, Address, Gender, Phone, email, username, password) values ('$name', '$address', '$gender', '$phone' '$email,
                                                                                                                '$username','$password')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>