<?php

require_once 'Account.php';

class Car  
{
    protected $id;
    protected $license;
    protected $driver;
    protected $passenger;
    
    public function __construct($license, Account $driver, $document)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function PrintDataCar(){
        echo    "
                License: $this->license
                Driver: {$this->driver->name}
                Number of Passengers: $this->passenger
                
                ";
    }

    public function getPassenger() {
        return $this->passenger;
    }

    public function setPassenger($passenger) {
        if ($passenger == 4) {
            $this->passenger = $passenger;
        } else {
            echo "Necesitas asignar 4 pasajeros";
        }
        
    }
}
