<?php

$db_config = [
  'hostname' => 'localhost',
  'database' => 'test_website',
  'username' => 'root',
  'password' => '09123002597'
];


$hostname = $db_config['hostname'];
$database = $db_config['database'];

$database = new PDO("mysql:host=$hostname;dbname=$database", $db_config["username"], $db_config["password"]);

?>
