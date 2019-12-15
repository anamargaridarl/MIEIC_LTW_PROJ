<?php
    include_once('../templates/head.php');
    include_once('../templates/footer.php');
    include_once('../templates/profile_house.php');
    include_once('../templates/nav_bar.php');
    include_once('../templates/profile_sidemenu.php');
    include_once('../templates/reservation_form.php');

    if (!isset($_SESSION['email']) || empty($_GET['id'])) {
        http_response_code(401);
        die(header('Location: /index.php'));
    }

    drawHead(array("../css/navfooter.css", "../css/reservation.css"), array("../js/modal_box.js", "../js/reservations.js", "../js/search.js"));
    drawNavBar(false);

    $house_id = $_GET['id'];
    $checkin = $_GET['checkin'];
    $checkout = $_GET['checkout'];
    $guests = $_GET['guests'];

    drawReservationForm($house_id, $checkin, $checkout, $guests);
    drawFooter(); 
?>
