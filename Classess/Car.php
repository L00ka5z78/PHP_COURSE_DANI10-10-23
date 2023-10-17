<?php

class Car
{
    //properities / fields
    private $brand; // === $this->brand
    private $color; // === $this->color
    // private $vehicleType = 'car';
    // public $vehicleType = 'car';

    // constructor
    public function __construct($brand, $color = "none") // color none is default if you have no second param
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // getter setter methods
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)  //set brand to new value
    {
        $this->brand = $brand;
    }


    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)  //set color to new value
    {
        $this->color = $color;
    }

    // methods to get properities from insie the class 

    public function getCarInfo()
    {
        return "Brand: " . $this->brand . ", color: " . $this->color;
    }
}

// $car01 = new Car("volvo", "green");
// echo $car01->getCarInfo();
// echo "<br>";
// echo $car01->vehicleType;    // shows properity from a class , but must be public as in line 9