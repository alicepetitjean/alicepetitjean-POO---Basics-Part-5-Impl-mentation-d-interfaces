<?php
    require_once 'Bike.php';
    require_once 'Car.php';
    require_once 'Vehicle.php';
    require_once 'LightableInterface.php';
 

    $bike = new Bike('Blue', 2);

    $bike->setCurrentSpeed(15);
    echo $bike->switchOn();

    var_dump($bike);

    echo $bike->getCurrentSpeed();

