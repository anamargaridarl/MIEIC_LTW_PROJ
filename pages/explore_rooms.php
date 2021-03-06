<?php
    include_once('../database/getters.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/list_rooms.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/modal_boxes.php');

    drawHead(array("../css/rooms.css", "../css/navfooter.css"), array('../js/modal_box.js','../js/show_pass.js', '../js/search.js'));?>

    
    <?php drawNavBar(false);

    $houses = getRoomsByRegion($_GET['region']);
    
    drawRooms($houses,"","","");?>

    <?php drawFooter(); ?>

