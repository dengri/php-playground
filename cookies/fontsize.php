<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	setcookie( 'font-size', $_POST['font-size'], time()+3600*6 );
	header( 'Location: fontsize.php' );
}


$font_size = isset( $_COOKIE['font-size'] ) ? $_COOKIE['font-size'] : '16';



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		ul, li{
			list-style:none;
			padding:0;
		}

		li select{
			margin:10px;
		}

		p{
			font-size:<?php echo htmlspecialchars($font_size) .'px;'; ?>
}


	</style>
</head>
<body>
	<form action="" method="post">
		<ul>
			<li><label for="font-size">Select font size</label><br>
					<select id="font-size" name="font-size">
						<option value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
						<option value="40">40</option>
						<option value="50">50</option>
					</select>
			</li>
			<li>
				<input type="submit" value="submit" name="submit">
			</li>
		</ul>
	</form>


	<h1>My page</h1>
	<p>
		Dolor numquam minima dolore dicta et. Enim rem excepturi labore quidem eaque consequuntur! Velit neque vero dolor nesciunt labore molestiae ab minima aliquid cupiditate exercitationem magnam ullam. Odit in doloremque.
	</p>

</body>
</html>
