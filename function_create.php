<?php

function createCookie($cookie_name, $username, $expiration){

	setcookie($cookie_name, $username, time() + ($expiration * 60));

	echo "[{$cookie_name} set for {$expiration} minutes.]";

}

$cookie_name = 'userboi';
$username = 'John carter';
$expiration = 120;

createCookie($cookie_name, $username, $expiration);

?>
