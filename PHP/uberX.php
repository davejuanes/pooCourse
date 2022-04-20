<?php 
class UberX extends Car 
{
    public $brand;
    public $model;

    public function __construct($license, Account $driver, $brand, $model/* , $passenger */)
    {
        parent::__construct($license, $driver);
        // $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        // $this->passenger = $passenger;
    }
}

?>