<?php 
    include_once('../database/users.php');
    include_once('../includes/session.php');

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        http_response_code(401);
        die(header('Location: http_error_page.php'));
    }

    $guests = $_POST['guests'];
    $hab_id = $_POST['house_id'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    reserve_room($_SESSION['email'], $guests, $hab_id, $checkin, $checkout);

    header('Location: ../pages/profile_reservation_page.php');
?>