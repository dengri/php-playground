<?php 

/*
 * Check if the user hase been logged in
 * ---------------------------------------------*/
function is_user_logged_in(){
		return $_SESSION['username'];
	}
