<?php

function authenticate($username, $password){

    if (strlen($password) < 6){
        echo "Password too short!";

    } elseif ($username === "admin" && $password !== "pass_1234"){
        echo "Password does not match!";

    } elseif ($username !== "admin" && $password === "pass_1234"){
        echo "Username {$username} not found!";

    } elseif ($username !== "admin" && $password !== "pass_1234"){
        echo "Username and password invalid!";
        
    } else {
        echo "User {$username} successfully authenticated!";
    }
}

authenticate("admin", "short");
echo "\n";
authenticate("admin", "bad_pass");
echo "\n";
authenticate("bad_admin", "pass_1234");
echo "\n";
authenticate("bad_admin", "bad_pass");
echo "\n";
authenticate("admin", "pass_1234");
echo "\n";

?>