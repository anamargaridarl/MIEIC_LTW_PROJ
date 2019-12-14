<?php
    include_once('../database/getters.php');
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/list_rooms.php');
    include_once('../templates/nav_bar.php');

    drawHead(array("../css/rooms.css", "../css/navfooter.css"), array('../modal_box.js', '../search.js','../show_pass.js'));

    drawNavBar();
    
    if(isset($_GET['checkin']) && isset($_GET['checkout']) ){
        $checkin = $_GET['checkin'];
        $checkout = $_GET['checkout'];
      }

    $houses = getRooms($_GET['location'], $_GET['checkin'], $_GET['checkout'], $_GET['guests'], $_GET['region']); # TODO: make it get the rooms based on checkin and checkout dates

    drawRooms($houses, $checkin, $checkout, $_GET['guests'], $nights);
    
    drawFooter();
?>
