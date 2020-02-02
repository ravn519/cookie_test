<?php

$cookie_name = 'userboi';
$username = 'John carter';

setcookie('userboi', NULL, time() - 3600);

function deleteCookie($cookie_name){

echo "Cookie {$cookie_name} deleted";

}

deleteCookie($cookie_name, $username);

?>