<?php 
require_once('car.php');

class UberPool extends Car {
    
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model/* , $passenger */)
    {
        parent::__construct($license, $driver);
        // $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        // $this->passenger = $passenger;
    }
}

?>