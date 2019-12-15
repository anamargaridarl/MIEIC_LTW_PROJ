<?php
  include_once('../includes/database.php');
  
  $name = $_GET['name'];

  // Database connection
  $db = Database::instance()->db();

  // Get the cities that start with $name
  $stmt = $db->prepare("SELECT * FROM cities WHERE upper(city_name) LIKE upper(?) LIMIT 10");
  $stmt->execute(array("$name%"));
  $cities = $stmt->fetchAll();
  
  // JSON encode them
  echo json_encode($cities);
?>