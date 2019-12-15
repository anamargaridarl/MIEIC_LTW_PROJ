<?php
    include_once('../database/getters.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/list_rooms.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/houses.php');
    
    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
      }
    
      if(isset($_GET['checkin']) && isset($_GET['checkout']) ){
        $checkin = $_GET['checkin'];
        $checkout = $_GET['checkout'];
      }

      $images = getImages($product_id);
    
    drawHead(array("../css/houses.css","../css/navfooter.css"), array("../js/carousel.js", "../js/modal_box.js",'../js/show_pass.js', '../js/search.js'));

    drawNavBar(false);
      
    drawHouse($product_id, $images, $checkin, $checkout, $_SESSION['email'], $_GET['guests']);
    
    drawFooter();
    
?>