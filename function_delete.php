<?php

const TIME = 7200;

$cookie_name = 'userboi';
$username = 'John carter';
$expiration = TIME;

setcookie('userboi', NULL, time() - TIME);

function deleteCookie($cookie_name){

echo "Cookie {$cookie_name} deleted";

}

deleteCookie($cookie_name, $username, $expiration);

?>