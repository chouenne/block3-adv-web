<?php



class LunchBag
{
    //Properties / Fields
    private $brand;
    private $color;
    public $volume;

    //Constructor
    public function __construct($brand, $color, $volume)
    {
        $this->brand = $brand;
        //$brand here is not the one in line 8, line 8 $brand is a property, and here is the same thing with line 13, a place holder
        $this->color = $color;
        $this->volume = $volume;
    }

    //Getter & setter method
    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    //Method

    public function getLunchBagInfo()
    {
        return "Brand: " . $this->brand . ", Color: " . $this->color . ", Volume: " . $this->volume;
    }

    //action

    private function containBox()
    {
    }
}
