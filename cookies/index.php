<?php

/*
 * Store cookies as an array
 * --------------------------------------*/
setcookie('prefs[fontSize]', '25px');
setcookie('prefs[category]', 'News');
setcookie('prefs[screenWidth]', '1024px');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>

		body{
			font-size:<?php echo $_COOKIE['fontSize']; ?>;
		}

	</style>
</head>
<body>
	<p>Hi there! How are You?</p>
	<?php 
		
		if(isset($_COOKIE['prefs'])){

			echo "<ul>";


			/*
			 * Walk through an array
			 * ----------------------------------------------*/
			foreach($_COOKIE['prefs'] as $key => $val ){

				echo '<li>'. htmlspecialchars($key) .' ---> '. htmlspecialchars($val) .'</li>';
			}


			echo "</ul>";
		}

	?>
</body>
</html>
