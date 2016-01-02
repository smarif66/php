<html>
<head>
	<title></title>
</head>
<body>
<form method="Get" action="problem1.php">
	<input type="number" placeholder:"user number" name="userNumber">
	<input type="submit" value="submit">
</form>

<div>
<?php
	$userNumber = $_GET["userNumber"];
	//echo $userNumber;
	if($userNumber%2 != 0){
	for($i = $userNumber; $i>0; $i=$i-2){
		echo "<h1 style='color:red;'>";
		echo $i."<br>";
		echo "</h1>";
		//$i--;
	}
	}else{
		echo "<h1 style='color:red'>";
		echo "your have to given odd number!!";
		echo "</h1>";
	}
	?>
</div>
</body>
</html>