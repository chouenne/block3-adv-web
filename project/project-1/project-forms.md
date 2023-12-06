Food vendor:

Ingredient:

| IngredientID | Name           | Type       | SupplierID | Price             |
| ------------ | -------------- | ---------- | ---------- | ----------------- |
| 1            | Fresh Tomatoes | Vegetables | 1          | $2.50 per kg      |
| 2            | Chicken Breast | Meat       | 2          | $5.00 per kg      |
| 3            | Broccoli       | Vegetables | 3          | $3.00 per bunch   |
| 4            | Olive Oil      | Condiment  | 4          | $10.00 per bottle |

Suppliers:

| SupplierID | Name          | Location          | Contact           | Email                    |
| ---------- | ------------- | ----------------- | ----------------- | ------------------------ |
| 1          | ABC Farms     | Farmington, QC    | John Farmer       | john@abcfarms.com        |
| 2          | Meat Master   | Butchertown, QC   | Mary Butcher      | mary@meatmaster.com      |
| 3          | Green Harvest | Veggie Valley, QC | Grace Gardner     | grace@greenharvest.com   |
| 4          | Gourmet Oils  | Olive Grove, QC   | Giuseppe Oliveoil | giuseppe@gourmetoils.com |

Dishes:
Table Name: Dish

| DishID | Name                   |
| ------ | ---------------------- |
| 1      | Grilled Chicken Salad  |
| 2      | Veggie Pasta Primavera |
| 3      | Margherita Pizza       |

Junction Table for Dish and Ingredient:
Table Name: DishIngredient

| DishID | IngredientID | Quantity(g) |
| ------ | ------------ | ----------- |
| 1      | 3            | 200         |
| 1      | 1            | 100         |
| 1      | 2            | 150         |

| DishID | IngredientID | Quantity(g) |
| ------ | ------------ | ----------- |
| 2      | 1            | 300         |
| 2      | 3            | 100         |
| 2      | 4            | 50          |

| DishID | IngredientID | Quantity(g) |
| ------ | ------------ | ----------- |
| 3      | 1            | 500         |
| 3      | 4            | 100         |
