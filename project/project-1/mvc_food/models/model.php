<?php

class ConnectionObject
{
  public function __construct(public $host, public $username, public $password, public $database)
  {
  }
}

class DishModel
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
      $results = [];
      while ($row = $result->fetch_assoc()) {
        $results[] = $row;
      }
      $mysqli->close();
      return $results;
    } else {
      return false;
    }
  }

  public function insertDish($dishName)
  {
    $mysqli = $this->connect();
    if ($mysqli) {
      $dishName = $mysqli->real_escape_string($dishName);
      $mysqli->query("INSERT INTO dish (name) VALUES ('$dishName')");
      $mysqli->close();
      return true;
    } else {
      return false;
    }
  }
}

?>