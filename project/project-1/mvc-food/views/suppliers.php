<h2>All the Suppliers</h2>

<div class="container">
  <div class="presentcards">
    <?php

    if ($suppliers) {
      foreach ($suppliers as $supplier) {
        echo "
    
              <div class='card border-light text-light bg-transparent mb-3  h-100'>
  <div class='card-header'>edit delete</div>
   <div class='card-body text-light'>
   <h3 class='card-title'>" . $supplier['supplierID'] . ' ' . $supplier['supplierName'] . "</h3>
    <ul class='list-group list-group-flush'>
  <li class='list-group-item bg-transparent text-light'>Location:" . $supplier['supplierLocation'] . "</li>
  <li class='list-group-item bg-transparent text-light'>Contact:" . $supplier['supplierContact'] . "</li>
  <li class='list-group-item bg-transparent text-light'>Email:" . $supplier['supplierEmail'] . "</li>
</ul>
 </div>
 </div>
      ";
        // var_dump($dishes);
    

        // echo $dish['dishID'] . ' ' . $dish['dishName'] . ' ' . $dish['dishDescription'] . '<br>';
      }
    } else {
      echo 'No supplier found';
    }
    ?>
  </div>

</div>