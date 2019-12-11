<?php
    include_once('../database/getters.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/house_info.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');

    if (!isset($_SESSION['email'])) {
        //die(header('Location: /index.php'));
        http_response_code(401);
    }

    drawHead(array("../css/profile_sidemenu.css","../css/houseinfo.css","../css/navfooter.css"), array('modal_box.js','show_pass.js'));

    drawNavBar();?>
    <div class="middle">

    <?php
    
    drawSideMenu();
    
    $house = getRoom(2);
    $reservations = getReservationsHouse(2);

    
    drawHouseProfile($house, 2,$reservations);?>
    
</div>
    <?php drawFooter(); ?>

