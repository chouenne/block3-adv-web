<?php

// if ($ingredients) {
//   foreach ($ingredients as $ingredient) {
//     echo $ingredient['ingredientID'] . ' ' . $ingredient['ingredientName'] . ' ' . $ingredient['ingredientPrice'] . ' ' . $ingredient['supplierName'] . ' ' . $ingredient['ingredientTypeName'] . '<br>';
//   }
// } else {
//   echo 'No ingredient found';
// }
// ?>

<h2>All the Ingredients</h2>

<div class="container">
  <div class="presentcards">
    <?php

    if ($ingredients) {
      foreach ($ingredients as $ingredient) {
        echo "
    
              <div class='card border-light text-light bg-transparent mb-3  h-100'>

   <div class='card-body text-light'>
   <h3 class='card-title'>" . $ingredient['ingredientID'] . ' ' . $ingredient['ingredientName'] . "</h3>
    <ul class='list-group list-group-flush'>
  <li class='list-group-item bg-transparent text-light'>Price:" . $ingredient['ingredientPrice'] . "</li>
  <li class='list-group-item bg-transparent text-light'>Supplier:" . $ingredient['supplierName'] . "</li>
  <li class='list-group-item bg-transparent text-light'>Type:" . $ingredient['ingredientTypeName'] . "</li>
</ul>
  <div class='card-header'> <form method='POST'>
                                <input type='hidden' name='ingredientID' value='" . $ingredient['ingredientID'] . "'>
                               
                                    <input type='submit' name='editIngredient' value='Edit' class='btn btn-info'>
                                    <input type='submit' name='deleteIngredient' value='Delete'  class='btn btn-danger'>
                         
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