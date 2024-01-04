<h2>Add a New Dish</h2>

<form method="POST" action="?action=showdishes">
  <div class="mb-3">
    <label for="dishName" class="form-label">Name</label>
    <input type="text" name="dishName" placeholder="Dish Name" required>
  </div>
  <div class="mb-3">
    <label for="dishDescription" class="form-label">Description</label>
    <textarea type="text" name="dishDescription" placeholder="Description" required> </textarea>
    <div class="mb-3">
      <input class="btn btn-success" type="submit" name="submit" value="Add Dish">
</form>