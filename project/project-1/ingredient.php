<?php

class Ingredient
{
  private $IngredientID;
  private $name;
  private $type;
  private $supplierID;
  private $price;

  public function __construct($IngredientID, $name, $type, $supplierID, $price)
  {
    $this->IngredientID = $IngredientID;
    $this->name = $name;
    $this->type = $type;
    $this->supplierID = $supplierID;
    $this->price = $price;
  }

  public function getIngredientID()
  {
    return $this->IngredientID;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }

}



?>