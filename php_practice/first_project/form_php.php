<?php
require "conn.php";

$uname = $_GET["uname"];
$uemail = $_GET["uemail"];
$upass = $_GET["upass"];
$uroll = $_GET["uroll"];
// echo "<h1>Your Name is: " .$uname. "</h1>";
// echo "<h1>Your E-mail is: " .$uemail. "</h1>";
// echo "<h1>Your password is: " .$upass. "</h1>";
// echo "<h1>Your roll is: " .$uroll. "</h1>";
if($uname == ""){
	echo "<h1>Your have to enter your name !!!</h1>";
	exit();
}
if($uemail == ""){
	echo "<h1>Your have to enter your email !!!</h1>";
	exit();
}
if($upass == ""){
	echo "<h1>Your have to enter your password !!!</h1>";
	exit();
}
if($uroll == ""){
	echo "<h1>Your have to enter your roll !!!</h1>";
	exit();
}


$insertQuery = "insert into firsttable values('', '$uname', '$uemail', '$upass', '$uroll')";
mysqli_query($conn, $insertQuery);
if(mysqli_affected_rows($conn) > 0){
	echo "Your are registreted;";
}else{
	echo "Problem registration problem!!!!";
}



?>