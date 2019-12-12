<?php
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/profile_house.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');
    include_once('../templates/reservation_form.php');

    drawHead(array("../css/navfooter.css", "../css/reservation.css"), array("../modal_box.js", "../reservations.js"));
    drawNavBar();

    drawReservationForm();
    drawFooter(); 
?>
