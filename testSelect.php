<?php
 include 'database.php';
$groupName="group1";
      try {
        $rows = $database->prepare('SELECT * FROM userGroup WHERE groupName = :groupName');
        $rows->bindParam(':groupName', $groupName);
        $rows->execute();
        $rows->setFetchMode(PDO::FETCH_ASSOC);
      while ($row = $rows->fetch()) {

          echo  $row['groupId'];
      }


      } catch(PDOException $e) {
              return 'false';
      }

