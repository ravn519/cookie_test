<?php

    header('HTTP/1.0 500 Server Error'); //Remove This Line Before Beginning!

    /********************************************************************************
     0) Require the auth.php file
    ********************************************************************************/


    /********************************************************************************
     1) Get the username and password POST values
    ********************************************************************************/


    /********************************************************************************
     2)  Check if username is one of the valid users (case insensitive). If it is not,
        return a 403 error with message: "Username Not Found"
    ********************************************************************************/


    /********************************************************************************
     3)  If username is valid, check that the given password (case sensitive) matches
        the valid login. If it does not match, return a 401 error with the message:
        "Password Invalid".
    ********************************************************************************/


    /********************************************************************************
     4)  If username and password are valid, return a 200 code with message:
        "Successful Login"
    ********************************************************************************/


?>