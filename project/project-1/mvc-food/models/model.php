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
}


//class for ingredient table

// class ingredientModel
// {
//   private $mysqli;
//   private $connectionObject;

//   public function __construct($connectionObject)
//   {
//     $this->connectionObject = $connectionObject;
//   }

//   public function connect()
//   {
//     try {
//       $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
//       if ($mysqli->connect_error) {
//         throw new Exception('Could not connect');
//       }
//       return $mysqli;
//     } catch (Exception $e) {
//       return false;
//     }
//   }

//   public function selectIngredient()
//   {
//     $mysqli = $this->connect();
//     if ($mysqli) {
//       $result = $mysqli->query("SELECT * FROM ingredient");

//       while ($row = $result->fetch_assoc()) {
//         $results[] = $row;
//       }
//       $mysqli->close();
//       return $results;
//     } else {
//       return false;
//     }
//   }

//   public function insertIngredient($ingredientName, $ingredientType, $ingredientPrice)
//   {
//     $mysqli = $this->connect();
//     if ($mysqli) {
//       $mysqli->query("INSERT INTO ingredient (ingredientName, ingredientType, ingredientPrice) VALUES ('$ingredientName', '$ingredientType', '$ingredientPrice')");
//       $mysqli->close();
//       return true;
//     } else {
//       return false;
//     }
//   }
// }
?>