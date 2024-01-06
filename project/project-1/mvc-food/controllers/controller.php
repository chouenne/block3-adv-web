<?php

//control is the file that connect model and view,select, edit, update, delete..

include_once 'models/model.php';

class Controller
{
  private $dish;
  private $ingredientModel;
  private $supplierModel;

  public function __construct($connection)
  {
    $this->dish = new dishModel($connection);
    $this->ingredientModel = new ingredientModel($connection);
    $this->supplierModel = new supplierModel($connection);
  }

  //control function for the dish
  public function showDishes()
  {
    $dishes = $this->dish->selectDishes();
    include 'views/home.php';
  }

  public function showForm()
  {
    include 'views/form.php';
  }

  public function add()
  {
    $dishName = $_POST['dishName'];
    $dishDescription = $_POST['dishDescription'];

    if (!$dishName) {
      echo "<p>Missing information</p>";
      $this->showForm();
      return;
    } else if ($this->dish->insertDish($dishName, $dishDescription)) {
      echo "<p>Added dish: $dishName</p>";
    } else {
      echo "<p>Could not add dish</p>";
    }
    $this->showDishes();
  }

  public function deleteDish()
  {
    if (isset($_POST['deleteDish'])) {
      $dishID = $_POST['dishID'];
      if ($this->dish->deleteDish($dishID)) {
        echo "<p style='color:white; font-size:14px; width: 80%; margin: 0 auto;'>Successfully deleted dish ID: $dishID</p>";
      } else {
        echo "<p style='color:white; font-size:14px; width: 80%; margin: 0 auto;'>Failed to delete dish ID: $dishID</p>";
      }
    }

  }
  public function updatedishForm()
  {
    $dishID = $_POST['dishID'];
    $dish = $this->dish->getDishById($dishID); // Add a method to fetch a dish by ID
    include 'views/editDish.php';
  }

  public function updateDish()
  {
    if (isset($_POST['updateDish'])) {
      $dishID = $_POST['dishID'];
      $dishName = $_POST['dishName'];
      $dishDescription = $_POST['dishDescription'];
      if ($this->dish->updateDish($dishID, $dishName, $dishDescription)) {
        echo "<p>Successfully updated dish with ID: $dishID</p>";
      } else {
        echo "<p>Failed to update dish with ID: $dishID</p>";
      }
    }
    $this->showDishes();
  }


  public function showNav()
  {
    include 'views/nav.php';
  }

  // controll for the ingredient tables

  public function showIngredient()
  {
    $ingredients = $this->ingredientModel->selectIngredients();
    include 'views/ingredients.php';
  }


  //function of showing the form of adding the ingredients
  public function showFormIngredient()
  {
    $suppliers = $this->ingredientModel->selectSupplier();
    $ingredientTypes = $this->ingredientModel->selectIngredientType();

    include 'views/formIngredient.php';
  }

  public function addIngredient()
  {
    $ingredientName = $_POST['ingredientName'];
    $ingredientPrice = $_POST['ingredientPrice'];
    $supplierID = $_POST['supplierID'];
    $ingredientTypeID = $_POST['ingredientTypeID'];
    if ($this->ingredientModel->insertIngredient($ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID)) {
      echo "<p>Successfully added: $ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID!</p>";
    } else {
      echo "<p>Failed to add!</p>";
    }
  }

  public function deleteIngredient()
  {
    if (isset($_POST['deleteIngredient'])) {
      $ingredientID = $_POST['ingredientID'];
      if ($this->ingredientModel->deleteIngredient($ingredientID)) {
        echo "<p style='color:white; font-size:14px; width: 80%; margin: 0 auto;'>Successfully deleted ingredient ID: $ingredientID</p>";
      } else {
        echo "<p style='color:white; font-size:14px; width: 80%; margin: 0 auto;'>Failed to delete ingredient ID: $ingredientID</p>";
      }
    }

  }

  //this form is the edit form, this function for fetching the data that need to be updated
  public function updateingredientForm()
  {
    $ingredientID = $_POST['ingredientID'];
    $ingredient = $this->ingredientModel->getIngredientById($ingredientID); // Add a method to fetch a ingredient by ID
    $suppliers = $this->ingredientModel->selectSupplier(); //fetch suppliers fpr the dropdown in the edit form
    $ingredientTypes = $this->ingredientModel->selectIngredientType(); //fetch types for the dropdown in the edit form
    include 'views/editIngredient.php';
  }

  public function updateIngredient()
  {
    if (isset($_POST['updateIngredient'])) {
      $ingredientID = $_POST['ingredientID'];
      $ingredientName = $_POST['ingredientName'];
      $ingredientPrice = $_POST['ingredientPrice'];
      $supplierID = $_POST['supplierID'];
      $ingredientTypeID = $_POST['ingredientTypeID'];

      if ($this->ingredientModel->updateIngredient($ingredientID, $ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID)) {
        echo "<p>Successfully updated ingredient with ID: $ingredientID</p>";
      } else {
        echo "<p>Failed to update ingredient with ID: $ingredientID</p>";
      }
    }
    // $this->showIngredient();
  }

  //control function for the dish
  public function showSuppliers()
  {
    $suppliers = $this->supplierModel->selectSuppliers();
    include 'views/suppliers.php';
  }

  public function showFormSupplier()
  {
    include 'views/formSupplier.php';
  }

  public function addSupplier()
  {
    $supplierName = $_POST['supplierName'];
    $supplierLocation = $_POST['supplierLocation'];
    $supplierContact = $_POST['supplierContact'];
    $supplierEmail = $_POST['supplierEmail'];


    if ($this->supplierModel->insertSupplier($supplierName, $supplierLocation, $supplierContact, $supplierEmail)) {
      echo "<p style='color:white; font-size:14px; width: 80%; margin: 0 auto;'>Added supplier: $supplierName, $supplierName, $supplierLocation, $supplierContact, $supplierEmail!</p>";
    } else {
      echo "<p style='color:white; font-size:14px;';>Could not add the supplier</p>";
    }
  }
}
//end of the class controller


include_once 'controllers/connection.php';
$connection = new connectionObject($host, $username, $password, $database);
$controller = new Controller($connection);
// if (isset($_POST['submit'])) {
//   $controller->add();
// } else {
//   $controller->showForm();
// }
$controller->showNav();

if (isset($_POST['submitIngredient'])) {
  $controller->addIngredient();
} elseif (isset($_POST['updateIngredient'])) {
  $controller->updateIngredient();
} elseif (isset($_POST['deleteIngredient'])) {
  $controller->deleteIngredient();
} elseif (isset($_POST['submitSupplier'])) {
  $controller->addSupplier();
} elseif (isset($_POST['deleteDish'])) {
  $controller->deleteDish();
} elseif (isset($_POST['editIngredient'])) {
  $controller->updateIngredientForm();
} elseif (isset($_POST['editDish'])) {
  $controller->updateDishForm();
} elseif (isset($_POST['updateDish'])) {
  $controller->updateDish();
}


if (isset($_GET['page'])) {
  if ($_GET['page'] == 'dishes') {
    $controller->showDishes();
  } elseif ($_GET['page'] == 'adddish') {
    $controller->showForm();
  } elseif ($_GET['page'] == 'addingredient') {
    $controller->showFormIngredient();
  } elseif ($_GET['page'] == 'ingredients') {
    $controller->showIngredient();
  } elseif ($_GET['page'] == 'suppliers') {
    $controller->showSuppliers();
  } elseif ($_GET['page'] == 'addsupplier') {
    $controller->showFormSupplier();
  }
}


if (isset($_GET['action'])) {
  if ($_GET['action'] == 'showdishes') {
    $controller->showDishes();
  } elseif ($_GET['action'] == 'showIngredients') {
    $controller->showIngredient();
  } elseif ($_GET['action'] == 'showSuppliers') {
    $controller->showSuppliers();
  }
}


?>