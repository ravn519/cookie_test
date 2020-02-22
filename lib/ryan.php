<?php

class Ryan {

    //Test function

    static function test(){

        echo "this is a test.";
        
    }

    //Create cookie function test

    static function createCookie($cookie_name, $username, $expiration){

        setcookie($cookie_name, $username, time() + ($expiration * 60));
    
        echo "[{$cookie_name} set for {$expiration} minutes.]";

    }

    //View cookie function test

    static function viewCookie($cookie_name){

        echo "Cookie Name: {$cookie_name}";
        echo "\n";
        echo "Username: ";
        echo $_COOKIE[$cookie_name];
    
    }

    //Password function test

    static function authenticate($username, $password){

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

    //Cookie delete function test

    static function deleteCookie($cookie_name){

        setcookie('userboi', NULL, time() - 3600);
    
        echo "Cookie {$cookie_name} deleted";
    
    }

    //Object test

    static function makeObject($username, $password, $pin){

        $userinfo = array('username' => $username, 'password' => $password, 'pin' => $pin);
        
        print_r ($userinfo);

    }

    //Iterator test

    static function betterIterator($arr){

        foreach ($arr as $value) {

            echo $value;
            echo "\n";

        }

    }

    //First/Last name interator

    static function firstLastIterator($arr){

        for ($i=0; $i <= count($arr) - 3; $i=$i + 3){ 

            echo $arr[$i] . " " . $arr[$i+1] . " " . $arr[$i + 2];
            echo "\n";
        }

    } 

    //Fibonacci sequence loop

    static function fibonacci($end){

        $i = 0;
        $first = 0;
        $second = 1;

        while ($i < $end){ 
        
            echo $first; 
            echo "\n";

            $third = $second + $first; 
            $first = $second; 
            $second = $third; 
            $i = $i + 1; 
        }
    }

    //Fizzbuzz for loop test

    static function fizzBuzz($start, $end){

        $i = $start;

        for ($i; $i <= $end; $i++) {

            if($i % 3 == 0 && $i % 5== 0) {
                echo "FizzBuzz";
                echo "\n";
            }

            elseif($i % 3 == 0) {
                echo "Fizz";
                echo "\n";
            }

            elseif($i % 5 == 0) {
                echo "Buzz";
                echo "\n";
            }

            else{
                echo "$i";
                echo "\n";
            }
        }
    }

    //Fizzbuzz while loop test

    static function fizzBuzzWhile($start, $end){

        $i = $start;
    
        while ($i <= $end) {

            $fb = "";
    
            if ($i % 3 == 0) {
                $fb .= "Fizz";
            }
    
            if ($i % 5 == 0) {
                $fb .= "Buzz";
            }
        
            if ($i % 3 !== 0 && $i % 5 !== 0) {
                $fb .= "$i";
            }
        
            echo $fb;
            echo "\n";
            $i++;
        }
    }

    //String search test

    static function isCrewCab($str){

        $result = strpos(strtoupper($str), "C-CAB");

        if ($result === FALSE){
            return FALSE;
        } else {
            return TRUE;
        }

    }

    static function convertWheelbase($str){

        return round(((float) explode(" ", $str)[0]) / 12, 1);

    }

    static function isCanadian($dealer){

        if ($dealer[1] === "4") {
            return TRUE;
        
        } else {
            return FALSE;

        }

    }

}

?>