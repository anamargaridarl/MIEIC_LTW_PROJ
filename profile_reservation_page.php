<?php
    include_once('database/getters.php');
    include_once('templates/head.php');
    include_once('templates/footer.php');
    include_once('templates/profile_reservation.php');
    include_once('templates/nav_bar.php');

    drawHead(array("css/profilereservation.css", "css/navfooter.css"), array());

    drawNavBar();

    $reservations = getReservations($id_person); 

    drawReservations($reservations);
    
    drawFooter();
?>
