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

  public function deleteDish($dishID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $mysqli->query("DELETE FROM dish WHERE dishID = '$dishID'");
      $mysqli->close();
      return true;
    } else {
      return false;
    }
  }

  public function updatedish($dishID, $dishName, $dishDescription)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $mysqli->query("UPDATE dish 
                                SET dishName = '$dishName', dishDescription = '$dishDescription'
                                WHERE dishID = '$dishID'");
      $mysqli->close();
      return true;
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

  //fetch the record of ingredients from database
  public function selectIngredients()
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      // $result = $mysqli->query("SELECT ingredient.*, supplier.supplierName, ingredientType.ingredientTypeName
      //                                       FROM ingredient
      //                                       NATURAL JOIN supplier
      //                                       NATURAL JOIN ingredientType
      //                                       ORDER BY ingredientID ASC
      //                                     ;");
      // $result = $mysqli->query("SELECT ingredient.*, supplier.supplierName, ingredientType.ingredientTypeName
      //                                       FROM ingredient
      //                                       INNER JOIN supplier ON ingredient.supplierID = supplier.supplierID
      //                                       INNER JOIN ingredientType ON ingredient.ingredientTypeID = ingredientType.ingredientTypeID
      //                                       ORDER BY ingredientID ASC
      //                                     ;");
      $result = $mysqli->query("SELECT ingredient.*, supplier.supplierName, ingredientType.ingredientTypeName
                                            FROM ingredient
                                           LEFT JOIN supplier ON ingredient.supplierID = supplier.supplierID
                                            LEFT JOIN ingredientType ON ingredient.ingredientTypeID = ingredientType.ingredientTypeID
                                            ORDER BY ingredientID ASC
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

  public function deleteIngredient($ingredientID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $mysqli->query("DELETE FROM ingredient WHERE ingredientID = '$ingredientID'");
      $mysqli->close();
      return true;
    } else {
      return false;
    }
  }

  //for edit form fetch
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

  // update ingredient

  // public function updateIngredient($ingredientID, $ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID)
  // {
  //   $mysqli = $this->connect();
  //   if ($mysqli) {
  //     $mysqli->query("UPDATE ingredient 
  //                     SET ingredientName = '$ingredientName', ingredientPrice = '$ingredientPrice', supplierID = '$supplierID', 
  //                       ingredientTypeID = '$ingredientTypeID'
  //                       WHERE ingredientID = '$ingredientID'");
  //     $mysqli->close();
  //     return true;
  //   } else {
  //     return false;
  //   }
  // }

  public function updateIngredient($ingredientID, $ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      // Use a prepared statement
      $stmt = $mysqli->prepare("UPDATE ingredient 
                                  SET ingredientName = ?, ingredientPrice = ?, supplierID = ?, ingredientTypeID = ?
                                  WHERE ingredientID = ?");

      // Bind parameters
      $stmt->bind_param("ssiii", $ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID, $ingredientID);

      // Execute the statement
      if ($stmt->execute()) {
        // Update successful
        $stmt->close();
        $mysqli->close();
        return true;
      } else {
        // Update failed
        echo "Error: " . $stmt->error;
        $stmt->close();
        $mysqli->close();
        return false;
      }
    } else {
      return false;
    }
  }


}


//class for the dishIngredient
class dishIngredientModel
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

  //select the data from the related tables
  public function selectingredient()
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $result = $mysqli->query("SELECT * FROM ingredient");
      while ($row = $result->fetch_assoc()) {
        $results[] = $row;
      }
      $mysqli->close();
      return $results;
    } else {
      return false;
    }
  }

  public function selectdish()
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

  //fetch the record of ingredients from database
  public function selectdishIngredient()
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      // $result = $mysqli->query("SELECT ingredient.*, supplier.supplierName, ingredientType.ingredientTypeName
      //                                       FROM ingredient
      //                                       NATURAL JOIN supplier
      //                                       NATURAL JOIN ingredientType
      //                                       ORDER BY ingredientID ASC
      //                                     ;");
      // $result = $mysqli->query("SELECT ingredient.*, supplier.supplierName, ingredientType.ingredientTypeName
      //                                       FROM ingredient
      //                                       INNER JOIN supplier ON ingredient.supplierID = supplier.supplierID
      //                                       INNER JOIN ingredientType ON ingredient.ingredientTypeID = ingredientType.ingredientTypeID
      //                                       ORDER BY ingredientID ASC
      //                                     ;");
      $result = $mysqli->query("SELECT dishIngredient.*, dish.dishName, ingredient.ingredientName
                                            FROM dishIngredient
                                           LEFT JOIN dishID ON dish.dishID = dishIngredient.dishID
                                            LEFT JOIN ingredientID ON ingredient.ingredientID = dishIngredient.ingredientID
                                            ORDER BY dishIngredient ASC
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

  //insert ingredient function 
  public function insertdishIngredient($dishID, $ingredientID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $mysqli->query("INSERT INTO dishIngredient (supplierID, ingredientID) VALUES ('$dishID', '$ingredientID')");
      $mysqli->close();
      return true;
    } else {
      return false;
    }
  }

  public function deletedishIngredient($dishIngredientID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $mysqli->query("DELETE FROM dishIngredient WHERE dishIngredientID = '$dishIngredientID'");
      $mysqli->close();
      return true;
    } else {
      return false;
    }
  }

  //for edit form fetch
  public function getdishIngredientById($dishIngredientID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $result = $mysqli->query("SELECT * FROM dishIngredient WHERE dishIngredientID = '$dishIngredientID'");
      $dishIngredient = $result->fetch_assoc();
      $mysqli->close();
      return $dishIngredient;
    } else {
      return false;
    }
  }

  // update ingredient

  // public function updateIngredient($ingredientID, $ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID)
  // {
  //   $mysqli = $this->connect();
  //   if ($mysqli) {
  //     $mysqli->query("UPDATE ingredient 
  //                     SET ingredientName = '$ingredientName', ingredientPrice = '$ingredientPrice', supplierID = '$supplierID', 
  //                       ingredientTypeID = '$ingredientTypeID'
  //                       WHERE ingredientID = '$ingredientID'");
  //     $mysqli->close();
  //     return true;
  //   } else {
  //     return false;
  //   }
  // }

  public function updatedishIngredient($ingredientID, $ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      // Use a prepared statement
      $stmt = $mysqli->prepare("UPDATE ingredient 
                                  SET ingredientName = ?, ingredientPrice = ?, supplierID = ?, ingredientTypeID = ?
                                  WHERE ingredientID = ?");

      // Bind parameters
      $stmt->bind_param("ssiii", $ingredientName, $ingredientPrice, $supplierID, $ingredientTypeID, $ingredientID);

      // Execute the statement
      if ($stmt->execute()) {
        // Update successful
        $stmt->close();
        $mysqli->close();
        return true;
      } else {
        // Update failed
        echo "Error: " . $stmt->error;
        $stmt->close();
        $mysqli->close();
        return false;
      }
    } else {
      return false;
    }
  }


}

//class for the supplier 
class supplierModel
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
  //the list
  public function selectSuppliers()
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

  public function deleteSupplier($supplierID)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $mysqli->query("DELETE FROM supplier WHERE supplierID = '$supplierID'");
      $mysqli->close();
      return true;
    } else {
      return false;
    }
  }

  // update ingredient

  public function updateSupplier($supplierID, $supplierName, $supplierLocation, $supplierContact, $supplierEmail)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $mysqli->query("UPDATE supplier 
                      SET supplierName = '$supplierName', supplierLocation = '$supplierLocation', supplierContact = '$supplierContact', 
                        supplierEmail = '$supplierEmail'
                        WHERE supplierID = '$supplierID'");
      $mysqli->close();
      return true;
    } else {
      return false;
    }
  }
}


?>