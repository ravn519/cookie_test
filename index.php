<?php

require (dirname(__FILE__) . '/lib/autoload.php');

require (dirname(__FILE__) . '/data/trucks.php');

require (dirname(__FILE__) . '/data/names.php');

foreach ($models as $model) {

    if (Ryan::isCrewCab($model)) {
        echo "Is Crew Cab\n";
    } else {
        echo "Is Not Crew Cab\n";
    }
    
}

foreach ($wheelbases as $wheelbase){

    echo Ryan::convertWheelbase($wheelbase), " ft.\n";
}

?>