<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="css/login_style.css">
	    <link rel="icon" href="icon.png">
</head>
<body>

<img src="icon.png" class="icon">
<div class="logo">AUTO TIME</div>
<h2>LOGIN</h2>
<div class="form">
<form method="post" action="">
	Email: <br><br>
	<input type="text" name="email" class="email" required><br><br>
	Password: <br><br>
	<input type="password" name="password" class="password" required><br><br>
	<input class="login" type="submit" name="login" value="LOGIN">
</form>
</div>

<a href="register.php">Register</a>

</body>
</html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "auto_database";

$conn = mysqli_connect($servername,$username,$password,$db);

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$hash = password_hash($pass, PASSWORD_DEFAULT);
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
    	$verify = password_verify($pass,$row['password']);
    	if (($email == $row['email']) && ($verify == "true")) {
    		$_SESSION['email'] = $row['email'];
    		header('location: home.php');
    	}
    	else {
    		echo "<p style='color: white; position: absolute; top: 600px; left: 558px;'>Invalid username or password</p>";
    	}
    }     
}

?>
