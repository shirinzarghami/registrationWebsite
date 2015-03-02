<?php
  class User
  {
    private $database;
    private $username;
    private $email;
    private $group;


    public function __construct($database, $userName, $group, $email)
    {
      $this->database = $database;
      $this->userName = $userName;
      $this->group = $group;
      $this->email = $email;
    }

    public function save()
    {
         try {
          $query = $this->database->prepare("INSERT INTO usersTB (groupId, userName, email) VALUES (:group, :userName, :email)");

        return $query->execute(array(':group' =>  $this->group, ':userName' =>  $this->userName, ':email' =>  $this->email));

      } catch(PDOException $e) {
        return 'false';
      }

    }
  }

 ?>
