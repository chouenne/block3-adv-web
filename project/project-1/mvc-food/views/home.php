<h2>All the Dishes</h2>

<div class="container">
  <div class="presentcards">
    <?php

    if ($dishes) {
      foreach ($dishes as $dish) {
        echo "

      <div class='card border-light text-light bg-transparent mb-3  h-100'>
  <div class='card-header'>edit delete</div>
   <div class='card-body text-light'>
   <h3 class='card-title'>" . $dish['dishID'] . ' ' . $dish['dishName'] . "</h3>
    <p class='card-text'>" . $dish['dishDescription'] . "</p>
 </div>
 </div>
      ";
        // var_dump($dishes);
    

        // echo $dish['dishID'] . ' ' . $dish['dishName'] . ' ' . $dish['dishDescription'] . '<br>';
      }
    } else {
      echo 'No dish found';
    }
    ?>
  </div>

</div>