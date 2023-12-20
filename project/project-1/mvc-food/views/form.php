<form method="POST">
  <input type="text" name="dishName" placeholder="type the dish name"
    value="<?php echo isset($_POST['dishName']) ? $_POST['dishName'] : ""; ?>"> <input type="submit" name="submit"
    value="Submit">
  <input type="reset" name="reset" value="Reset">
</form>