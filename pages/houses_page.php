<?php
    include_once('../database/getters.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/list_rooms.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/houses.php');
    
    if (isset($_GET['id'])){
      $house_id = $_GET['id'];
    }
    
    if (isset($_GET['checkin']) && isset($_GET['checkout']) ){
      $checkin = $_GET['checkin'];
      $checkout = $_GET['checkout'];
    }

  $images = getImages($house_id);
  $owner = getHouseOwnerEmail($house_id);
  $guests = $_GET['guests'];
  
  drawHead(array("../css/houses.css", "../css/navfooter.css"), array("../carousel.js", "../modal_box.js", "search.js"));

  drawNavBar();

  drawHouse($house_id, $images, $checkin, $checkout, $owner, $guests);
  
  drawFooter();
    
?>