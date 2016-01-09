<?php
require "conn.php";
$deleteID = $_GET["deleteId"];
//echo $deleteID;
$deleteQuery = "delete from firsttable where id = '$deleteID'";
mysqli_query($conn, $deleteQuery);
if(mysqli_affected_rows($conn) > 0){
	echo "<h1>Record Deleted :)</h1><a href='usertable.php'>go to usertable</a>";
}
else{
	echo "<h1>Problem Deleteing Process !!</h1>";
}

?>