<?php
session_start();
if (isset($_SESSION['username'])) {
    $_SESSION['message']="You are not logged in. Login to continue.";
    header("location : login.php");
}
if (isset($_GET['logout'])) {
    header("location : login.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
	</head>
	<body>
		<?php 
		if (isset($_SESSION['success'])) :
		?>
		
		<h1>Welcome :</h1>
		<?php 
		echo $_SESSION['username'];
		echo $_SESSION['success'];
		unset($_SESSION['success']);
		?>
		<a href="index.php?logout='1'">logout</a>
		<?php endif;?>
	</body>
</html>