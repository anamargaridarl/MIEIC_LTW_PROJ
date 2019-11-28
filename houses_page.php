<?php
    include_once('database/rooms.php');
    include_once('templates/head.php');
    include_once('templates/footer.php');
    include_once('templates/list_rooms.php');
    include_once('templates/nav_bar.php');
    include_once('templates/houses.php');
    
    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
      }
    
    $houses = getRoom($product_id);
    $images = getImages($product_id);
    
    drawHead(array("css/houses.css", "css/navfooter.css"), array("carousel.js"));

    drawNavBar();
    
    drawHouse($houses,$images);
    
    drawFooter();
    
?>