<?php
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/profile_house.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');
    include_once('../templates/reservation_form.php');

    drawHead(array("../css/navfooter.css", "../css/reservation.css"), array("../modal_box.js", "../reservations.js", "../search.js"));
    drawNavBar();

    $house_id = $_GET['id'];
    $checkin = $_GET['checkin'];
    $checkout = $_GET['checkout'];
    $guests = $_GET['guests'];
    $nights = $_GET['nights'];

    drawReservationForm($house_id, $checkin, $checkout, $guests, $nights);
    drawFooter(); 
?>
