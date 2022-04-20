<?php

    require_once('Car.php');
    require_once('uberX.php');
    require_once('uberPool.php');
    require_once('account.php');

    $uberX = new UberX("CVB123", new Account("Dave Mercado", "DAV456"), "Chevrolet", "Spark");

    $uberX->PrintDataCar();

    $uberPool = new UberPool("DMJ678", new Account("Dave Juanes", "EWQ543"), "Dodge", "Attitude");

    $uberPool->PrintDataCar();

?>