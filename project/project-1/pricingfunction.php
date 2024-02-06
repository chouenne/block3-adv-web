<?php
require_once 'Ingredient.php';
require_once 'Dish.php';

class PricingFunctions
{
  public function calculateIngredientPrice(Ingredient $ingredient, $quantity)
  {
    // Calculate the price based on the quantity and the ingredient's price
    return $ingredient->getPrice() * $quantity;
  }

  public function calculateDishPrice(Dish $dish)
  {
    // Calculate the price based on the sum of ingredient prices
    $totalPrice = 0;
    foreach ($dish->getIngredients() as $ingredient) {
      $totalPrice += $this->calculateIngredientPrice($ingredient['ingredient'], $ingredient['quantity']);
    }
    return $totalPrice;
  }
}

?>