<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="./css/admin_style.css">
	<link rel="icon" href="icon.png">
</head>
<body>

<div>
	<p>Welcome to admin panel</p>
</div>
<br><br><br><br><br>
<h3 style="font-family: calibri">Add news:</h3>
<form method="post" enctype="multipart/form-data">
	<textarea name="add_text" rows="10" cols="30"></textarea><br><br>
	<input type="file" name="add_image">
	<input type="submit" name="add" value="ADD">
</form>
<h2 style="font-family: calibri">NEWS</h2>
<br>
<hr>

</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "auto_database";

$conn = mysqli_connect($servername,$username,$password,$db);

if (isset($_POST['add'])) {
	$target = "images/" . basename($_FILES['add_image']['name']);

	$image = $_FILES['add_image']['name'];
	$news = $_POST['add_text'];
	$sql = "INSERT INTO news(news_text, image)
	VALUES
	('$news', '$image')
	";
	mysqli_query($conn,$sql);

	if (move_uploaded_file($_FILES['add_image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}
	else {
		$msg = "There was a problem uploading image";
	}
}

$sql2 = "SELECT * FROM news ORDER BY id DESC";

$result = mysqli_query($conn,$sql2);

while ($row = mysqli_fetch_assoc($result)) {
	echo $row['news_text'];
?>


<form method="post" action="">
	<input type="hidden" name="news_id" value=<?php echo $row['id'] ?>><br>
	<?php echo "<img src='images/" . $row['image'] . "' style='width: 125px; height: 90px'>"; ?>
	<input type="hidden" name="news_txt" value=<?php echo $row['news_text'] ?>><br>
	<input type="submit" name="delete" value="DELETE">
	<input type="submit" name="edit" value="EDIT">
</form>
<hr>
<?php
ob_start();	
}

if(isset($_POST['delete'])) {
	$sql3 = "DELETE FROM news WHERE id=".$_POST['news_id'];
    mysqli_query($conn,$sql3);
    header('Location: '.$_SERVER['PHP_SELF']);
}


if (isset($_POST['edit'])) {
	?>
	<form method="post" enctype="multipart/form-data">
		<input type="hidden" name="n_id" value="<?php echo $_POST['news_id']; ?>">
		<?php
		$sql2 = "SELECT * FROM news WHERE id=".$_POST['news_id'];
		$result = mysqli_query($conn,$sql2);
		while ($r = mysqli_fetch_assoc($result)) {
			$n = $r['news_text'];
		}
		?>
		<textarea name="news_txt" rows="10" cols="30"><?php echo $n ?></textarea>
		<input type="file" name="update_image">
		<input type="submit" name="update" value="UPDATE">
	</form>

<?php
}
if (isset($_POST['update'])) {
	$id = $_POST['n_id'];
	$target = "images/" . basename($_FILES['add_image']['name']);
	$image = $_FILES['update_image']['name'];
	$news_text = $_POST['news_txt'];
	$sql4 = "UPDATE news SET news_text='$news_text', image='$image' WHERE id='$id'";
	mysqli_query($conn,$sql4);
	if (move_uploaded_file($_FILES['add_image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}
	else {
		$msg = "There was a problem uploading image";
	}
	header('Location: '.$_SERVER['PHP_SELF']);
}
mysqli_close($conn);
?>

