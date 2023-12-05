Food vendor:

Ingredient:

| IngredientID | Name           | Type       | SupplierID | Price             |
| ------------ | -------------- | ---------- | ---------- | ----------------- |
| I01          | Fresh Tomatoes | Vegetables | S01        | $2.50 per kg      |
| I02          | Chicken Breast | Meat       | S02        | $5.00 per kg      |
| I03          | Broccoli       | Vegetables | S03        | $3.00 per bunch   |
| I04          | Olive Oil      | Condiment  | S04        | $10.00 per bottle |

Suppliers:

| SupplierID | Name          | Location          | Contact           | Email                    |
| ---------- | ------------- | ----------------- | ----------------- | ------------------------ |
| S01        | ABC Farms     | Farmington, QC    | John Farmer       | john@abcfarms.com        |
| S02        | Meat Master   | Butchertown, QC   | Mary Butcher      | mary@meatmaster.com      |
| S03        | Green Harvest | Veggie Valley, QC | Grace Gardner     | grace@greenharvest.com   |
| S04        | Gourmet Oils  | Olive Grove, QC   | Giuseppe Oliveoil | giuseppe@gourmetoils.com |

Dishes:
Table Name: Dish

| DishID | Name                   |
| ------ | ---------------------- |
| D01    | Grilled Chicken Salad  |
| D02    | Veggie Pasta Primavera |
| D03    | Margherita Pizza       |

Junction Table for Dish and Ingredient:
Table Name: DishIngredient

| DishID | IngredientID | Quantity(g) |
| ------ | ------------ | ----------- |
| D01    | I03          | 200         |
| D01    | I01          | 100         |
| D01    | I02          | 150         |

| DishID | IngredientID | Quantity(g) |
| ------ | ------------ | ----------- |
| D02    | I01          | 300         |
| D02    | I03          | 100         |
| D02    | I04          | 50          |

| DishID | IngredientID | Quantity(g) |
| ------ | ------------ | ----------- |
| D03    | I01          | 500         |
| D03    | I04          | 100         |
