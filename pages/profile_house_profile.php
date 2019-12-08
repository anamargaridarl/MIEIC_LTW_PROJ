<?php
    include_once('../database/getters.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/house_profile.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');

    if (!isset($_SESSION['email'])) {
        //die(header('Location: /index.php'));
        http_response_code(401);
    }

    drawHead(array("../css/profile_sidemenu.css","../css/navfooter.css"), array('modal_box.js'));

    drawNavBar();?>
    <div class="middle">

    <?php
    
    drawSideMenu();
    
    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
      }
    
    $house = getRoom(3);
    $reservations = getReservationsHouse(3);

    
    drawHouseProfile($house, $reservations);?>
    
    </div>
    <?php drawFooter(); ?>

