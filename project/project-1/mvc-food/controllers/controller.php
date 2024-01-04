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

  //control function for the dish
  public function showSuppliers()
  {
    $suppliers = $this->supplier->selectSuppliers();
    include 'views/supplier.php';
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


    if (!$supplierName) {
      echo "<p>Missing information</p>";
      $this->showForm();
      return;
    } else if ($this->supplier->insertSupplier($supplierName, $supplierLocation, $supplierContact, $supplierEmail)) {
      echo "<p>Added supplier: $supplierName</p>";
    } else {
      echo "<p>Could not add supplier</p>";
    }
    $this->showSuppliers();
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