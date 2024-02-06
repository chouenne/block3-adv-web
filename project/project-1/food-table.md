## A. INNER JOIN

The INNER JOIN keyword selects all rows from both the tables as long as the condition is satisfied. This keyword will create the result-set by combining all rows from both the tables where the condition satisfies i.e value of the common field will be the same.

### Inner join table dishIngridient and ingredient

```

SELECT dishIngredient.ingredientID, dishIngredient.ingredientQuantity, dishIngredient.dishID, ingredient.ingredientName, ingredient.ingredientType, ingredient.ingredientPrice FROM ingredient
INNER JOIN dishIngredient
ON ingredient.ingredientID = dishIngredient.ingredientID;

```
