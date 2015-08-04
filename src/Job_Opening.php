<?php
class JobOpening
{
  private $title;
  private $description;


  function __construct($title_of_job, $description_of_job) {
    $this->title = $title_of_job;
    $this->description = $description_of_job;
  }

  function setTitle($new_title)
  {
    $this->title = $new_title;
  }
  function setDescription($new_description)
  {
    $this->description = $new_description;
  }
  function getTitle()
  {
    return $this->title;
  }
  function getDescription()
  {
    return $this->description;
  }
}

class Contact
{
  private $name;
  private $phone;
  private $address;

  function __construct($name_of_poster, $phone_of_poster, $address_of_poster) {
    $this->name = $name_of_poster;
    $this->phone = $phone_of_poster;
    $this->address = $address_of_poster;
  }
  function setName($new_name)
  {
    $this->$name = $new_name;
  }
  function setPhone($new_phone)
  {
    $this->$phone = $new_phone;
  }
  function setAddress($new_address)
  {
    $this->address = $new_address;
  }
  function getName()
  {
    return $this->name;
  }
  function getPhone()
  {
    return $this->phone;
  }
  function getAddress()
  {
    return $this->address;
  }
}



 ?>
