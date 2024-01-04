<h2>Add a New Dish</h2>

<div class="container d-flex justify-content-center">
  <form method="POST" action="?action=showdishes" style="width: 50%; margin-bottom:30px;">
    <div class="mb-3">
      <label for="dishName" class="form-label">Name</label>
      <input type="text" class="form-control" name="dishName" placeholder="Dish Name" required>
    </div>
    <div class="mb-3">
      <label for="dishDescription" class="form-label">Description</label>
      <textarea type="text" class="form-control" name="dishDescription" placeholder="Description" required style="
    height: 300px;
"> </textarea>
    </div>
    <div class="mb-3">
      <input class="form-control btn btn-success" type="submit" name="submit" value="Add New">
    </div>
  </form>
</div>