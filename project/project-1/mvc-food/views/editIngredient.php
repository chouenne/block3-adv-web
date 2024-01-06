<h2>Edit Ingredient</h2>

<div class="container d-flex justify-content-center">

  <form method="POST" action="?action=showIngredients" style="width: 50%; margin-bottom:30px;">
    <div class="mb-3">
      <input type="hidden" class="form-control" name="ingredientID" value="<?php echo $ingredient['ingredientID']; ?>">
    </div>

    <div class="mb-3">
      <label for="ingredientName" class="form-label">Name</label>
      <input type="text" class="form-control" name="ingredientName"
        value="<?php echo $ingredient['ingredientName']; ?>">
    </div>

    <div class="mb-3">
      <label for="ingredientrice" class="form-label">Price</label>
      <input type="decimal" class="form-control" name="ingredientPrice"
        value="<?php echo $ingredient['ingredientPrice']; ?>">
    </div>

    <div class="mb-3">
      <label for="supplierID" class="form-label">Supplier</label>
      <select name="supplierID">
        <option value=''>Select supplier</option>
        <?php
        foreach ($suppliers as $supplier) {
          $selected = ($supplier['supplierID'] == $ingredient['supplierID']) ? 'selected' : '';
          echo "<option value='" . $supplier['supplierID'] . "'$selected>" . $supplier['supplierName'] . "</option>";
        }
        ?>
      </select>
    </div>

    <div class="mb-3">
      <label for="ingredientID" class="form-label">Ingredient Type</label>
      <select name="ingredientID">
        <option value=''>Select ingredient type</option>
        <?php
        foreach ($ingredientTypes as $ingredientType) {
          $selected = ($ingredientType['ingredientTypeID'] == $ingredient['ingredientTypeID']) ? 'selected' : '';
          echo "<option value='" . $ingredientType['ingredientTypeID'] . "'$selected>" . $ingredientType['ingredientTypeName'] . "</option>";
        }
        ?>
      </select>
    </div>

    <div class="mb-3">

      <input class="form-control btn btn-success" type="submit" name="updateIngredient" value="Update">
    </div>

  </form>
</div>