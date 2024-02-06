<h2>Classify the ingedients to the dishes</h2>

<div class="container d-flex justify-content-center">

  <form method="POST" action="?action=showdishIngredients" style="width: 50%; margin-bottom:30px;">
    <div class="mb-3">
      <label for="" class="form-label">Ingredient Name:</label>
      <?php
      if ($ingredients) {
        echo "<select name='ingredientID' style='width:100%; height: 41px;
    border-radius: 6px;'>";
        echo "<option value=''>Select Ingredient</option>";
        foreach ($ingredients as $ingredient) {
          echo "<option value='" . $ingredient['ingredientID'] . "'>" . $ingredient['ingredientName'] . "</option>";
        }
        echo "</select>";
      } else {
        echo 'No suppliers found';
      }
      ?>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Dish Name:</label>
      <?php
      if ($dishes) {
        echo "<select name='dishID' style='width:100%; height: 41px; border-radius: 6px;'>";
        echo "<option value=''>Select Dish</option>";
        foreach ($dishes as $dish) {
          echo "<option value='" . $dish['dishID'] . "'>" . $dishName['dishName'] . "</option>";
        }
        echo "</select>";
      } else {
        echo 'No ingredients found';
      }
      ?>
    </div>

    <div class="mb-3">

      <input class="form-control btn btn-success" type="submit" name="submitdishIngredient" value="Add New">
    </div>

  </form>
</div>