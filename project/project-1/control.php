<?php

require_once 'Ingredient.php';
require_once 'Dish.php';
require_once 'pricingfunction.php';

// Example Usage
$ingredient = new Ingredient(1, 'Fresh Tomatoes', 'Vegetables', 'ABC Farms', 2.50);
$dishIngredients = [
  ['ingredient' => $ingredient, 'quantity' => 200]
]; // Example array of ingredients
$dish = new Dish(101, 'Grilled Chicken Salad', $dishIngredients);

// Create an instance of PricingFunctions
$pricingFunctions = new PricingFunctions();

// Calculate ingredient and dish prices
$ingredientPrice = $pricingFunctions->calculateIngredientPrice($ingredient, 200);
$dishPrice = $pricingFunctions->calculateDishPrice($dish);

echo "Ingredient Price: $" . $ingredientPrice . "<br>";
echo "Dish Price: $" . $dishPrice . "<br>";

?>