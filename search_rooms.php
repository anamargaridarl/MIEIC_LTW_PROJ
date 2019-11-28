<?php
    include_once('database/rooms.php');
    include_once('templates/head.php');
    include_once('templates/footer.php');
    include_once('templates/list_rooms.php');
    include_once('templates/nav_bar.php');

    drawHead(array("css/rooms.css", "css/navfooter.css"), array());
    drawNavBar();

    $houses = getRooms($_GET['location']); # TODO: make it get the rooms based on checkin and checkout dates
    
    drawRooms($houses);
    
    drawFooter();
?>