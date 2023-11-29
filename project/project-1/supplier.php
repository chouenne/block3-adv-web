<?php
class Supplier
{
  private $supplierID;
  private $name;
  private $location;
  private $contact;
  private $email;

  public function __construct($supplierID, $name, $location, $contact, $email)
  {
    $this->supplierID = $supplierID;
    $this->name = $name;
    $this->location = $location;
    $this->contact = $contact;
    $this->email = $email;
  }


}
?>