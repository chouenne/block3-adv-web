<?php
class Dish
{
  private $dishID;
  private $name;
  private $ingredients;


  public function __construct($dishID, $name, $ingredients)
  {
    $this->dishID = $dishID;
    $this->name = $name;
    $this->ingredients = $ingredients;
  }

  public function getIngredients()
  {
    return $this->ingredients;
  }


}

?>