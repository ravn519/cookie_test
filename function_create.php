<?php

const TIME = 7200;

setcookie('userboi', 'John Carter', time() + TIME);

$cookie_name = 'userboi';
$username = 'John carter';
$expiration = TIME;

function createCookie($cookie_name, $username, $expiration){

    echo "[{$cookie_name} set for {$expiration} minutes.]";
  }
   
  createCookie($cookie_name, $username, $expiration);

?>
