<?php

function deleteCookie($cookie_name){

	setcookie('userboi', NULL, time() - 3600);

	echo "Cookie {$cookie_name} deleted";

}

$cookie_name = 'userboi';

deleteCookie($cookie_name);

?>