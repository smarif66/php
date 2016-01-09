<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
table{
	margin: 0px auto;
}
td, th{
	width: 200px;
	height: 35px;
	text-align: center;
}
th{
	background: gray;
}
h1{
	font-size: 35px;
	text-align: center;
	margin-top: 30px;
}
ul{
	margin: 0px;
	padding: 0px;
	text-decoration: none;
	text-align: right;
	margin: 20px 100px 0 0px;
}
ul li{
	display: inline-block;
	font-size: 17px;
	font-weight: bold;
	margin-right: 15px;
}
ul li a{
	color: black;
	transition:.3s;
	text-decoration: none;
}
ul li a:hover{
	color: red;
}



</style>
<body>
	<ul>
		<li><a href="form.php">Home</a></li>
		<li><a href="usertable.php">Table</a></li>
		<li><a href="usertable.php">Others</a></li>
	</ul>

<h1>User Table:</h1>
<?php
require "conn.php";
$selectQuery = "select * from firsttable";
$result = mysqli_query($conn, $selectQuery);
	echo "<table border='1'>";
	echo "<tr><th>Id</th><th>Name</th><th>E-mail</th><th>Password</th><th>Roll</th><th>Action</th></tr>";
while($row = mysqli_fetch_array($result)){
	// echo "<pre>";
	// print_r($row)."<hr>";
	// echo "</pre>";
	// exit();
	echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["e-mail"]."</td><td>".$row["password"]."</td><td>".$row["roll"]."</td><td><a href='editRecord.php?editId=".$row["id"]."'>Edit</a><a href='deleteRecord.php?deleteId=".$row["id"]."'>delete</a></td></tr>";
}
	echo "</table>";

?>
</body>
</html>

