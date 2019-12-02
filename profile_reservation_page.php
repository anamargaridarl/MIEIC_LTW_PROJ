<?php
    include_once('database/getters.php');
    include_once('templates/head.php');
    include_once('templates/footer.php');
    include_once('templates/profile_reservation.php');
    include_once('templates/nav_bar.php');
    include_once('templates/profile_sidemenu.php');


    drawHead(array("css/profilereservation.css", "css/profile_sidemenu.css", "css/navfooter.css"), array('modalBox.js'));

    drawNavBar();

    drawSideMenu();

    $reservations = getReservations(6); 

    drawReservations($reservations);
    
    drawFooter();
?>
