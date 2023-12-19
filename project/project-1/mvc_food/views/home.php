<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="">
    <select name="" id="">
      <option value="">Select a dish</option>
      <?php
      if ($dishes) {
        foreach ($dishes as $dish) {
          echo "<option value=" . $dish['ID'] . ">" . $dish['name'] . "</option>";
        }
      } else {
        echo 'No dish found';
      }
      ?>
    </select>
  </form>
</body>

</html>