<?php

class Car
{
    //properities / fields
    private $brand; // === $this->brand
    private $color; // === $this->color
    private $vehicleType = 'car';

    // constructor
    public function __construct($brand, $color = "none") // color none is default if you have no second param
    {
        $this->brand = $brand;
        $this->color = $color;
    }
    // methods to get properities from insie the class 

    public function getCarInfo()
    {
        return "Brand: " . $this->brand . ", color: " . $this->color;
    }
}

$car01 = new Car("volvo", "green");
