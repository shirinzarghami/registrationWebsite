
<?php

function creatListgroup(){
    include 'database.php';
      try {
        echo "<select id='".groupId."'>";
        $rows = $database->prepare('SELECT * FROM userGroup');
        $rows->execute();
        $rows->setFetchMode(PDO::FETCH_ASSOC);
      while ($row = $rows->fetch()) {

          echo "<option value='" . $row['groupId'] ."'>" . $row['groupName'] ."</option>";
      }

      echo "</select>";

      } catch(PDOException $e) {
              return 'false';
      }
    }

?>





