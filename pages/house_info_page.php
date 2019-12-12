<?php
    include_once('../database/getters.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/house_info.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');

    if (!isset($_SESSION['email'])) {
        http_response_code(401);
        die(header('Location: /index.php'));
    }

    drawHead(array("../css/profile_sidemenu.css","../css/houseinfo.css","../css/navfooter.css"), array('../modal_box.js'));

    drawNavBar();?>
    <div class="middle">

    <?php
    
    drawSideMenu();
    
    $house_id = $_GET['id'];
    $house = getRoom($house_id);
    $reservations = getReservationsHouse($house_id);

    
    drawHouseProfile($house, $house_id,$reservations);?>
    
</div>
    <?php drawFooter(); ?>

