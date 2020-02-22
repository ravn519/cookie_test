<?php

require (dirname(__FILE__) . '/lib/autoload.php');

require (dirname(__FILE__) . '/data/trucks.php');

require (dirname(__FILE__) . '/data/names.php');

$thing = Ryan::nameObject($names);

header("Content-Type: application/json");

echo json_encode ($thing);

?>