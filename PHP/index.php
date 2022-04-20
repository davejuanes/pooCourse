<?php

require_once('Car.php');
require_once('Account.php');

$car = new Car("AWD123", new Account("David Mercado", 'LPS654'));
$car->PrintDataCar();