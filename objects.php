<?php

function makeobject ($username, $password, $pin){

$userinfo = array('username' => $username, 'password' => $password, 'pin' => $pin);

print_r ($userinfo);

}


makeobject ('John Carter', 'Password!', '1234');


?>