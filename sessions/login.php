<?php 
//Defining username and password constants
	define ('USERNAME', 'dengri');
	define ('PASSWORD', '1234567');

	session_start();

	/*
	 * Check if the form has been submitted
	 * --------------------------------------------------*/

	if (isset($_POST['posted'])){ 
		$username = $_POST['username'];
		$password = $_POST['password'];


		/*
		 * Check if the Login and Password are correct
		 * ---------------------------------------------------*/

		if ($username == USERNAME && $password == PASSWORD){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header('Location: ./admin.php');
		} else {
			$status = "Incorrect login credentials";
		}

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	<style>
		li{
			margin:20px;
			list-style:none;
		}	
	</style>

</head>

<body>

	<h1>Login</h1>

	<form action="login.php" method="POST">

	<ul>
		<li>
			<label for="username">Username</label>
			<input type="text" name="username">
		</li>

		<li>
			<label for="passsword">Password</label>
			<input type="text" name="password">
		</li>

		<li>
			<input type="submit" value="login" name="posted">
		</li>
	</ul>
		
	</form>
	<?php if(isset($status)): ?>
		<?php echo $status; ?>
	<?php endif; ?>
</body>
</html>
