<?php

class LunchBag
{
    //Properties / Fields
    // private $brand;
    // private $color;
    private $bagsizeL;
    private $bagsizeW;
    private $bagsizeD;


    private $containerL;
    private $containerW;
    private $containerD;

    //Constructor
    public function __construct($bagsizeL, $bagsizeW, $bagsizeD, $containerL, $containerW, $containerD)
    {

        $this->bagsizeL = $bagsizeL;
        $this->bagsizeW = $bagsizeW;
        $this->bagsizeD = $bagsizeD;
        $this->containerL = $containerL;
        $this->containerW = $containerW;
        $this->containerD = $containerD;
    }

    //Getter & setter method
    // public function getbagsizeL()
    // {
    //     return $this->bagsizeL;
    // }

    // public function setbagsizeL($bagsizeL)
    // {
    //     $this->bagsizeL = $bagsizeL;
    // }

    // public function getbagsizeW()
    // {
    //     return $this->bagsizeW;
    // }

    // public function setbagsizeL($bagsizeW)
    // {
    //     $this->bagsizeL = $bagsizeW;
    // }

    // public function getbagsizeD()
    // {
    //     return $this->bagsizeD;
    // }

    // public function setbagsizeD($bagsizeD)
    // {
    //     $this->bagsizeD = $bagsizeD;
    // }


    //Method

    public function getLunchBagSize()
    {
        return "Lunch Bag Large: " . $this->bagsizeL . "in, Width: " . $this->bagsizeW  . "in, Depth: " . $this->bagsizeD . "in";
    }

    public function getContainerSize()
    {
        return "Container Large: " . $this->containerL . "in, Container Width: " . $this->containerW  . "in, Lunch Bag Depth: " . $this->containerD . "in";
    }

    //method that check if the box could be contained in the lunchbox

    public function compareSize()
    {
        if (($this->containerL <= $this->bagsizeL) && ($this->containerW <= $this->bagsizeW) && ($this->containerD <= $this->bagsizeD)) {
            echo "Fit!";
        } else {
            echo "Not fit!";
        }
    }
}
