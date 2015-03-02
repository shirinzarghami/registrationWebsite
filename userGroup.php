<?php
  class UserGroup
  {
    private $database;
    private $username;
    private $group;

    public function __construct($database, $username, $password, $group)
    {
      $this->database = $database;
      $this->username = $username;
      $this->group = $group;
    }

    public function save()
    {
         try {
        $query = $this->database->prepare("INSERT INTO userGroup(groupName) VALUES (:group)");

        return $query->execute(array(':group' =>  $this->group));

      } catch(PDOException $e) {
        return 'false';
      }

    }
  }

 ?>
