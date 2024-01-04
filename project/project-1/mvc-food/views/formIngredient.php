<h2>Add a Ingredient</h2>
<form method="POST" action="?action=showIngredients">
  <label for="name">Name</label>
  <input type="text" name="ingredientName" placeholder="Name" required>

  <label for="price">Price</label>
  <input type="decimal" name="ingredientPrice" placeholder="Price" required>

  <label for="">Supplier</label>
  <?php
  if ($suppliers) {
    echo "<select name='supplierID'>";
    echo "<option value=''>Select supplier</option>";
    foreach ($suppliers as $supplier) {
      echo "<option value='" . $supplier['supplierID'] . "'>" . $supplier['supplierName'] . "</option>";
    }
    echo "</select>";
  } else {
    echo 'No suppliers found';
  }
  ?>


  <label for="">Ingredient Type</label>
  <?php
  if ($ingredientTypes) {
    echo "<select name='ingredientTypeID'>";
    echo "<option value=''>Select ingredient type</option>";
    foreach ($ingredientTypes as $ingredientType) {
      echo "<option value='" . $ingredientType['ingredientTypeID'] . "'>" . $ingredientType['ingredientTypeName'] . "</option>";
    }
    echo "</select>";
  } else {
    echo 'No ingredients found';
  }
  ?>

  <input type="submit" name="submitIngredient" value="Add Ingredient">

</form>