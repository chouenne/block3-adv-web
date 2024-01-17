<h2>All the Dishes' Ingredients</h2>

<div class="container">
  <div class="presentcards">
    <?php

    if ($dishIngredients) {
      foreach ($dishIngredients as $dishIngredient) {
        echo "
    
              <div class='card border-light text-light bg-transparent mb-3  h-100'>

   <div class='card-body text-light'>
   <h3 class='card-title'>" . $dishIngredient['dishIngredientID'] . ' ' . $dishName['dishName'] . "</h3>
    <ul class='list-group list-group-flush'>
  <li class='list-group-item bg-transparent text-light'>Ingredient:" . $ingredientName['ingredientName'] . "</li>
</ul>
  <div class='card-header'> <form method='POST'>
                                <input type='hidden' name='dishIngredientID' value='" . $dishIngredient['dishIngredientID'] . "'>
                               
                                    <input type='submit' name='editdishIngredient' value='Edit' class='btn btn-info'>
                                    <input type='submit' name='deletedishIngredient' value='Delete'  class='btn btn-danger'>
                         
                            </form></div>
 </div>
 </div>
      ";

      }
    } else {
      echo 'No ingredient found';
    }
    ?>
  </div>

</div>