<?php

include_once 'models/dishModel.php';
include_once 'controllers/connection.php';
$connection2 = new connectionObject($host, $username, $password, $database);

class dishController
{
  private $dish;

  public function __construct($connection)
  {
    $this->dish = new dishModel($connection);
  }

  public function showDishes()
  {
    $dishes = $this->dish->selectDishes();
    if ($dishes === false) {
      echo 'Error fetching dishes.';
      return;
    }
    include 'views/dishes.php';
  }
}

$dishController->showDishes();


?>