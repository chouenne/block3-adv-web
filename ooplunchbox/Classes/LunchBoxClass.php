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
        // $this->brand = $brand;
        //$brand here is not the one in line 8, line 8 $brand is a property, and here is the same thing with line 13, a place holder
        // $this->color = $color;
        $this->bagsizeL = $bagsizeL;
        $this->bagsizeW = $bagsizeW;
        $this->bagsizeD = $bagsizeD;
        $this->containerL = $containerL;
        $this->containerW = $containerW;
        $this->containerD = $containerD;
    }

    //Getter & setter method
    // public function getVolume()
    // {
    //     return $this->volume;
    // }

    // public function setVolume($volume)
    // {
    //     $this->volume = $volume;
    // }

    // public function getBoxSize()
    // {
    //     return $this->boxsize;
    // }

    // public function setBoxSize($boxsize)
    // {
    //     $this->boxsize = $boxsize;
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
        if (($this->containerL > $this->bagsizeL) || ($this->containerW > $this->bagsizeW) || ($this->containerD > $this->bagsizeD)) {
            echo "Not Fit!";
        } else {
            echo "Fit";
        }
    }
}
