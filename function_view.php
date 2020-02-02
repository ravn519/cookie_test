<?php

function viewCookie($cookie_name){

	echo "Cookie Name: {$cookie_name}";
	echo "\n";
	echo "Username: ";
	echo $_COOKIE[$cookie_name];

}

$cookie_name = 'userboi';

viewCookie($cookie_name);

?>
