<?php

if ($ingredients) {
  foreach ($ingredients as $ingredient) {
    echo $ingredient['ingredientID'] . ' ' . $ingredient['ingredientName'] . ' ' . $ingredient['ingredientPrice'] . ' ' . $ingredient['supplierName'] . ' ' . $ingredient['ingredientTypeName'] . '<br>';
  }
} else {
  echo 'No ingredient found';
}
?>