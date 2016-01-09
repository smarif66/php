<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
.form input {
    border: 1px solid rgba(128, 128, 128, 0.46);
    height: 30px;
    width: 200px;
    margin-top: 10px;
}
.error{
	color: red;
	font-size: 20px;
}

</style>

</head>

<body>
<form action="" method="post" class="form">
	Username: <input type="text" placeholder="your username name" name="u_name"><br>
	Password: <input type="password" placeholder="Your user password" name="u_pass"><br>
	E-mail: <input type="email" placeholder="your email address" name="u_mail"><br>
	Mobile no: <input type="number" placeholder="Your contact number" name="u_mobile"><br>
	<input type="submit" value="submit" name="submit">
</form>

</body>
</html>

<?php
if(isset($_POST["submit"])){
	$u_name = $_POST["u_name"];
	$u_pass = $_POST["u_pass"];
	$u_mail = $_POST["u_mail"];
	$u_mobile = $_POST["u_mobile"];

	if(empty($u_name)){
		echo "<div class='error'>Username can't be empty </div><br>";
	}
	if(empty($u_pass)){
		echo "<div class='error'>User password can't be empty</div><br>";
	}
	if(empty($u_mail)){
		echo "<div class='error'>User email can't be empty</div><br>";
	}
	if(empty($u_mobile)){
		echo "<div class='error'>User mobile no can't be empty</div><br>";
	}}



?>