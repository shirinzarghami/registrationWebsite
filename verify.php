<?php

  include 'database.php';
  include 'user.php';
  include 'userGroup.php';

  $groupName = $_POST['groupName'];
  $objectType = $_POST['objectType'];
 $databaseName='test_website';
  $username= 'root';
  $password='09123002597';
  $hostname='localhost';

if ( $objectType=="user") {
  $userName = $_POST['userName'];
  $email = $_POST['email'];

  try {

    $rows = $database->prepare('SELECT * FROM userGroup WHERE groupName = :groupName');
    $rows->bindParam(':groupName', $groupName);
    $rows->execute();
    $rows->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $rows->fetch()) {


        $groupId = $row['groupId'];


        $user = new User($database, $userName, $groupId, $email );
        createResponse((string) $user->save());
    }
  } catch(PDOException $e) {
          return 'false';
  }

}else{
  $userGroup = new UserGroup($database, $username, $password, $groupName);
  createResponse((string) $userGroup->save());
}



function createResponse($response){
  header('Content-Type: application/json');
  if($response){
    echo json_encode(['success']);
    http_response_code(200);
  } else {
    echo json_encode(['fail']);
    http_response_code(200);
  }
}

function findGroupId($groupName){
$database = new PDO("mysql:host=$hostname;dbname=$database", $db_config["username"], $db_config["password"]);
}
