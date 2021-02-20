<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/register_style.css">
</head>
<body>

<div class="logo">AUTO TIME</div>
<h2>REGISTER</h2>
<div class="form">
<form method="post" action="">
	Email: <br><br>
	<input type="text" name="email" class="email" required><br><br>
	Password: <br><br>
	<input type="password" name="password" class="password" required><br><br>
	<input class="login" type="submit" name="register" value="REGISTER">
	<a href="login.php">Login</a>
</form>
</div>
</form>

</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "auto_database";

$conn = mysqli_connect($servername,$username,$password,$db);

if (isset($_POST['register'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$hash = password_hash($pass, PASSWORD_DEFAULT);
	$sql = "INSERT INTO users(email,password)
            VALUES
            ('$email','$hash')
            ";
            if (mysqli_query($conn,$sql)) {
            	echo "<div class='reg'>Registered succesffully</div>";
            }
        else {
        	echo "Not registered";
        }
}





?>