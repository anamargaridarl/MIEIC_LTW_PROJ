<?php
    include_once('../database/getters.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/profile_house.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');
    include_once('../templates/show_messages.php');

    if (!isset($_SESSION['email'])) {
        http_response_code(401);
        die(header('Location: /index.php'));
    }

    drawHead(array("../css/profilehouse.css", "../css/profile_sidemenu.css","../css/navfooter.css"), array('modal_box.js','show_pass.js'));
    showMessages();
    drawNavBar(false);?>
    <div class="middle">

    <?php
    
    drawSideMenu();

    $id = get_userid($_SESSION['username']);

    $houses = get_owner_houses($id); 

    drawHouses($houses);?>
    
    </div>
    <?php drawFooter(); ?>

