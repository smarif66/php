<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
form {
    box-shadow: 0 0 2px gray;
    padding: 30px 30px;
    width: 50%;
    margin: 70px auto;
}
h1 {
    text-align: center;
    margin-top: 50px;
    font-size: 50px;
}
input {
    border: 1px solid gray;
    height: 30px;
    width: 230px;
    margin-bottom: 10px;
    margin-left: 20px;
    padding-left: 5px;
}
input.submit {
    height: 40px;
    width: 236px;
    background: #69B318;
    color: white;
    font-size: 20px;
    letter-spacing: 2px;
    transition:.3s;
    cursor: pointer;
}
input.submit:hover{
	background: green;
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
th {
    background: green;
    height: 35px;
    color: white;
    font-size: 20px;
}


</style>
</head>
<body>
	<ul>
		<li><a href="from.php">Home</a></li>
		<li><a href="usertable.php">Table</a></li>
		<li><a href="usertable.php">Others</a></li>
	</ul>
	<h1>Sign Up</h1>
	<form action="form_php.php" method="GET">
	<table width="100%">
		<tr>
			<th><textfield>Your Name:</textfield></th>
			<td>:</td>
			<td><input type="text" name="uname" placeholder="Your name"></td>
		</tr>
		<tr>
			<th><textfield>Your E-mail:</textfield></th>
			<td>:</td>
			<td><input type="email" name="uemail" placeholder="Your e-mail"></td>
		</tr>
		<tr>
			<th><textfield>Your Pass:</textfield></th>
			<td>:</td>
			<td><input type="password" name="upass" placeholder="Your password"></td>
		</tr>
		<tr>
			<th><textfield>Your Roll:</textfield></th>
			<td>:</td>
			<td><input type="number" name="uroll" placeholder="Your roll"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input class="submit" type="submit" value="registration"></td>
		</tr>
	</table>
</form>
</body>
</html>