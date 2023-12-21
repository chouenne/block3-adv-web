<?php
if ($dishes) {
  foreach ($dishes as $dish) {
    echo $dish['dishID'] . ' ' . $dish['dishName'] . '<br>';
  }
} else {
  echo 'No dish found';
}
?>