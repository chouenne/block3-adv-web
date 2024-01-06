<h2>Edit Supplier</h2>

<div class="container d-flex justify-content-center">
  <form method="POST" action="?action=showSuppliers" style="width: 50%; margin-bottom:30px;">

    <div class="mb-3">
      <input type="hidden" class="form-control" name="supplierID" value="<?php echo $supplier['supplierID']; ?>">
    </div>

    <div class="mb-3">
      <label for="supplierName" class="form-label">Name</label>
      <input type="text" class="form-control" name="supplierName" value="<?php echo $supplier['supplierName']; ?>">
    </div>

    <div class="mb-3">
      <label for="supplierLocation" class="form-label">Supplier Location</label>
      <input type="text" class="form-control" name="supplierLocation"
        value="<?php echo $supplier['supplierLocation']; ?>">
    </div>

    <div class="mb-3">
      <label for="supplierContact" class="form-label">Supplier Contact</label>
      <input type="text" class="form-control" name="supplierContact"
        value="<?php echo $supplier['supplierContact']; ?>">
    </div>

    <div class="mb-3">
      <label for="supplierEmail" class="form-label">Email</label>
      <input type="text" class="form-control" name="supplierEmail" value="<?php echo $supplier['supplierEmail']; ?>">
    </div>

    <div class="mb-3">
      <input class="form-control btn btn-success" type="submit" name="updateSupplier" value="Update">
    </div>
  </form>
</div>