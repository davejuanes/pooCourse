<?php

require_once 'Account.php';

class Car  
{
    public $id;
    public $license;
    public $driver;
    public $passenger;
    
    public function __construct($license, Account $driver/* , $passenger */)
    {
        // $this->id = $id;
        $this->license = $license;
        $this->driver = $driver;
        // $this->passenger = $passenger;
    }

    public function PrintDataCar(){
        echo    "License: "     . $this->license,
                "Driver: "      . $this->driver->name,
                "Document: "    . $this->driver->document;
    }
}
