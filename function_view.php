<?php

const TIME = 7200;

$cookie_name = 'userboi';
$username = 'John carter';
$expiration = TIME;

function viewCookie($cookie_name){

echo "Cookie Name: {$cookie_name}";
echo "\n";
echo "Username: ";
echo $_COOKIE[$cookie_name];

}

viewCookie($cookie_name, $username, $expiration);

?>
