<?php 

function url(){
	return sprintf("%s://%s", 
			(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != 'off')?"https":"http", $_SERVER["SERVER_NAME"]);

			//return http://localhost ou o nome do site
}