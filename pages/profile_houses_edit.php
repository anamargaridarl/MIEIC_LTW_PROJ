<?php
    include_once('../database/getters.php');
    include_once('../includes/session.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/profile_house_edit.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');

    if (!isset($_SESSION['email'])) {
        //die(header('Location: /index.php'));
        http_response_code(401);
    }

    drawHead(array("../css/profilehouseedit.css", "../css/profile_sidemenu.css","../css/navfooter.css"), array('modal_box.js'));

    drawNavBar();?>
    <div class="middle">

    <?php
    
    drawSideMenu();
    $house_id = $_GET['id'];
    $house = get_owner_house(3,$house_id); //REPLACE WITH VARIABLE
    editHouse($house);?>
    
    </div>
    <?php drawFooter(); ?>

