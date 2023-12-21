<?php

include_once 'models/model.php';

class Controller
{
  private $dish;

  public function __construct($connection)
  {
    $this->dish = new dishModel($connection);
  }

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

    if (!$dishName) {
      echo "<p>Missing information</p>";
      $this->showForm();
      return;
    } else if ($this->dish->insertDish($dishName)) {
      echo "<p>Added dish: $dishName</p>";
    } else {
      echo "<p>Could not add dish</p>";
    }
    $this->showDishes();
  }


}


include_once 'controllers/connection.php';
$connection2 = new connectionObject($host, $username, $password, $database);
$controller = new Controller($connection2);
if (isset($_POST['submit'])) {
  $controller->add();
} else {
  $controller->showForm();
}

?>