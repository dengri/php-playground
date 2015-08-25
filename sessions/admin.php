<?php 

session_start();
include('functions.php');

/*
 * Check if the user hase been logged in
 * ---------------------------------------------*/
if(!is_user_logged_in()){
	header('Location: login.php');
	die();
}

$username = $_SESSION['username'];
$password = $_SESSION['password'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<div style="position:absolute; padding:20px; background-color:#ccc; max-width:40%; margin:50px 30%;">
	<?php echo "Dear $username,<br>You have been successfuly loged in!"; ?>
	<form action="logout.php" method="GET"><input type="submit" value="logout"></form>
</div>

</body>
</html>
