<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Please insert the name of dishes</h1>
  <form method="POST">
    <input type="text" name="dishName" placeholder="type the dish name"
      value="<?php echo isset($_POST['dishName']) ? $_POST['dishName'] : ""; ?>"> <input type="submit" name="submit"
      value="Submit">
    <input type="reset" name="reset" value="Reset">
  </form>
</body>

</html>