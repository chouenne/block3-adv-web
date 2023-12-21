<?php

if ($dishes) {
  foreach ($dishes as $dish) {
    echo $dish['dishID'] . ' ' . $dish['dishName'] . ' ' . $dish['dishDescription'] . '<br>';
  }
} else {
  echo 'No dish found';
}
?>