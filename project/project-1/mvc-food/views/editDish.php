<h2>Edit Dish</h2>

<div class="container d-flex justify-content-center">
  <form method="POST" action="?action=showdishes" style="width: 50%; margin-bottom:30px;">
    <div class="mb-3">
      <input type="hidden" class="form-control" name="dishID" value="<?php echo $dish['dishID']; ?>">
    </div>

    <div class="mb-3">
      <label for="dishName" class="form-label">Name</label>
      <input type="text" class="form-control" name="dishName" value="<?php echo $dish['dishName']; ?>">
    </div>

    <div class="mb-3">
      <label for="dishDescription" class="form-label">Description</label>
      <textarea type="text" class="form-control" name="dishDescription" value="<?php echo $dish['dishDescription']; ?>"
        style="height:300px;color: black;"></textarea>
    </div>

    <div class="mb-3">
      <input class="form-control btn btn-success" type="submit" name="updateDish" value="Update">
    </div>
  </form>
</div>