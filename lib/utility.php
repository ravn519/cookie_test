<?php

class Utility {

    static function list($arr){

        foreach ($arr as $value) {

            echo $value;
            echo "\n";

        }
    }

    static function getDate($mode = NULL){

        switch ($mode) {
            case "short":
                return date("m/s/Y");
                break;

            case "long":
                return date("F dS, Y");
                break;
            
            default:
                return date("M dS, Y");
                break;
        }

    }

    static function getTime($mode = NULL){

        date_default_timezone_set("America/Chicago");

        switch ($mode) {
            case "short":
                return date("g:i a");
                break;

            case "long":
                return date("h:i:s A");
                break;
            
            default:
                return date("G:i");
                break;
        }


    }

}

?>