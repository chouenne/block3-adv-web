<?php

class connectionObject
{
  public function __construct(public $host, public $username, public $password, public $database)
  {
  }
}

//class for dish table
class dishModel
{
  private $mysqli;
  private $connectionObject;

  public function __construct($connectionObject)
  {
    $this->connectionObject = $connectionObject;
  }

  public function connect()
  {
    try {
      $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
      if ($mysqli->connect_error) {
        throw new Exception('Could not connect');
      }
      return $mysqli;
    } catch (Exception $e) {
      // Log the exception or echo a detailed error message for debugging.
      error_log($e->getMessage());
      return false;
    }
  }

  public function selectDishes()
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $result = $mysqli->query("SELECT * FROM dish");

      while ($row = $result->fetch_assoc()) {
        $results[] = $row;
      }
      $mysqli->close();
      return $results;
    } else {
      return false;
    }
  }

  public function insertDish($dishName, $dishDescription)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $mysqli->query("INSERT INTO dish (dishName, dishDescription) VALUES ('$dishName', '$dishDescription')");
      $mysqli->close();
      return true;
    } else {
      return false;
    }
  }


  public function getDishById($dishID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $result = $mysqli->query("SELECT * FROM dish WHERE dishID = '$dishID'");
      $dishes = $result->fetch_assoc();
      $mysqli->close();
      return $dishes;
    } else {
      return false;
    }
  }
}

//class for ingredient table
class ingredientModel
{
  //for connect to the database
  private $mysqli;
  private $connectionObject;
  public function __construct($connectionObject)
  {
    $this->connectionObject = $connectionObject;
  }

  public function connect()
  {
    try {
      $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
      if ($mysqli->connect_error) {
        throw new Exception('Could not connect: ' . $mysqli->connect_error);
      }
      return $mysqli;
    } catch (Exception $e) {
      // Log the exception or echo a detailed error message for debugging.
      error_log($e->getMessage());
      return false;
    }
  }

  //function select ingridients
  public function selectIngredients()
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $result = $mysqli->query("SELECT ingredient.*, supplier.supplierName, ingredientType.ingredientTypeName
                                            FROM ingredient
                                            NATURAL JOIN supplier
                                            NATURAL JOIN ingredientType
                                          ;");
      while ($row = $result->fetch_assoc()) {
        $results[] = $row;
      }
      $mysqli->close();
      return $results;
    } else {
      return false;
    }
  }

  //select the data from the related tables
  public function selectSupplier()
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $result = $mysqli->query("SELECT * FROM supplier");
      while ($row = $result->fetch_assoc()) {
        $results[] = $row;
      }
      $mysqli->close();
      return $results;
    } else {
      return false;
    }
  }

  public function selectIngredientType()
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $result = $mysqli->query("SELECT * FROM ingredientType");
      while ($row = $result->fetch_assoc()) {
        $results[] = $row;
      }
      $mysqli->close();
      return $results;
    } else {
      return false;
    }
  }


  //insert ingredient function 
  public function insertIngredient($ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $mysqli->query("INSERT INTO ingredient (ingredientName, ingredientPrice, supplierID, ingredientTypeID) VALUES ('$ingredientName', '$ingredientPrice', '$supplierID', '$ingredientTypeID')");
      $mysqli->close();
      return true;
    } else {
      return false;
    }
  }

  public function getIngredientById($ingredientID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $result = $mysqli->query("SELECT * FROM ingredient WHERE ingredientID = '$ingredientID'");
      $ingredient = $result->fetch_assoc();
      $mysqli->close();
      return $ingredient;
    } else {
      return false;
    }
  }

  //update ingredient

  // public function updateIngredient($ingredientID, $ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID)
  // {
  //   $mysqli = $this->connect();
  //   if ($mysqli) {
  //     $mysqli->query("UPDATE ingredient 
  //                               SET ingredientName = '$ingredientName', ingredientPrice = '$ingredientPrice', supplierID = '$supplierID', 
  //                               ingredientTypeID = '$ingredientTypeID', 
  //                               WHERE ingredientID = '$ingredientID'");
  //     $mysqli->close();
  //     return true;
  //   } else {
  //     return false;
  //   }
  // }

}

//class for the supplier 
class supplierhModel
{
  private $mysqli;
  private $connectionObject;

  public function __construct($connectionObject)
  {
    $this->connectionObject = $connectionObject;
  }

  public function connect()
  {
    try {
      $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
      if ($mysqli->connect_error) {
        throw new Exception('Could not connect');
      }
      return $mysqli;
    } catch (Exception $e) {
      // Log the exception or echo a detailed error message for debugging.
      error_log($e->getMessage());
      return false;
    }
  }

  public function selectsuppliers()
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $result = $mysqli->query("SELECT * FROM supplier");

      while ($row = $result->fetch_assoc()) {
        $results[] = $row;
      }
      $mysqli->close();
      return $results;
    } else {
      return false;
    }
  }

  public function insertSupplier($supplierName, $supplierLocation, $supplierContact, $supplierEmail)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $mysqli->query("INSERT INTO supplier (supplierName, supplierLocation, supplierContact, supplierEmail) VALUES ('$supplierName', '$supplierLocation', '$supplierContact', '$supplierEmail')");
      $mysqli->close();
      return true;
    } else {
      return false;
    }
  }


  public function getSupplierById($supplierID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $result = $mysqli->query("SELECT * FROM supplier WHERE supplierID = '$supplierID'");
      $supplier = $result->fetch_assoc();
      $mysqli->close();
      return $supplier;
    } else {
      return false;
    }
  }
}


?>