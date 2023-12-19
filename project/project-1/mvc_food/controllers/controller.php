<?php

include_once 'models/model.php';

class Controller
{
  private $model;

  public function __construct($connection)
  {
    $this->model = new DishModel($connection);
  }

  public function showDishes()
  {
    $dishes = $this->model->selectDishes();
    include 'views/home.php';
  }

  public function showForm()
  {
    include 'views/form.php';
  }

  public function add()
  {
    if (isset($_POST['submit'])) {
      $dishName = $_POST['dishName'];

      if (!$dishName) {
        echo "<p>Missing information</p>";
        $this->showForm();
        return;
      } else if ($this->model->insertDish($dishName)) {
        echo "<p>Added dish: $dishName</p>";
      } else {
        echo "<p>Could not add dish</p>";
      }
    }

    $this->showDishes();
  }
}

$connection2 = new ConnectionObject("localhost", "kathy_food", "myNameiSKaThY999$
", "xuan88_food");
$controller = new Controller($connection2);
$controller->add();

?>