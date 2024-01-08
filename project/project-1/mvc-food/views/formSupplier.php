<h2>Add a New Supplier</h2>

<div class="container d-flex justify-content-center">
  <form method="POST" action="?action=showSuppliers" style="width: 50%; margin-bottom:30px;">
    <div class="mb-3">
      <label for="supplierName" class="form-label">Name</label>
      <input type="text" class="form-control" name="supplierName" placeholder="Name" required>
    </div>

    <div class="mb-3">
      <label for="supplierLocation" class="form-label">Supplier Location</label>
      <input type="text" class="form-control" name="supplierLocation" placeholder="Location" required>
    </div>

    <div class="mb-3">
      <label for="supplierContact" class="form-label">Supplier Contact</label>
      <input type="text" class="form-control" name="supplierContact" placeholder="Contact" required>
    </div>

    <div class="mb-3">
      <label for="supplierEmail" class="form-label">Email</label>
      <input type="text" class="form-control" name="supplierEmail" placeholder="Email" required>
    </div>

    <div class="mb-3">
      <input class="form-control btn btn-success" type="submit" name="submitSupplier" value="Add New">
    </div>
  </form>
</div>