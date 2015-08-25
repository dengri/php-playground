<?php 

/*
 * Check if the user hase been logged in
 * ---------------------------------------------*/
function is_user_logged_in(){
		return $_SESSION['username'];
	}



/*
 * Check if the Login and Password are correct
 * ---------------------------------------------------*/
function validate_user_credentials( $username, $password ){
	return $username == USERNAME && $password == PASSWORD;
}
