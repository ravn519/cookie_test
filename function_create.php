<?php

const TIME = 432000;



$cookie_name = 'userboi';
$username = 'John carter';
$expiration = 7200;

function createCookie($cookie_name, $username, $expiration){

    setcookie('userboi', 'John Carter', time() + TIME);

    echo "[{$cookie_name} set for {$expiration} minutes.]";
  }
   
  createCookie($cookie_name, $username, $expiration);

?>
