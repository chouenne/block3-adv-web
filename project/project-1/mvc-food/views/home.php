<form action="">
  <select name="" id="">
    <option value="">Select a dish</option>
    <?php
    if ($dishes) {
      foreach ($dishes as $dish) {
        echo "<option value=" . $dish['ID'] . ">" . $dish['dishName'] . "</option>";
      }
    } else {
      echo 'No dish found';
    }
    ?>
  </select>
</form>