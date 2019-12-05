<?php
    include_once('database/getters.php');
    include_once('templates/head.php');
    include_once('templates/footer.php');
    include_once('templates/profile_house.php');
    include_once('templates/nav_bar.php');
    include_once('templates/profile_sidemenu.php');

        if (!isset($_SESSION['username'])) {
            //die(header('Location: /index.php'));
            http_response_code(401);
        }

    drawHead(array("css/profilehouse.css", "css/profile_sidemenu.css","css/navfooter.css"), array('modalBox.js'));

    drawNavBar();?>
    <div class="middle">

    <?php
    
    drawSideMenu();
    $houses = get_owner_houses(3); 

    drawHouses($houses);?>
    
    </div>
    <?php drawFooter(); ?>

