<?php 
    include_once('../database/users.php');
    include_once('../includes/session.php');

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        http_response_code(401);
        die(header('Location: http_error_401.php'));
    }

    $guests = $_POST['guests'];
    $hab_id = $_POST['house_id'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    if (reserve_room($_SESSION['email'], $guests, $hab_id, $checkin, $checkout)) {
        $_SESSION['message'] = array('type' => 'success','content' => 'Reservation successful.');
    } else {
        $_SESSION['message'] = array('type' => 'error','content' => 'Reservation could not be made.');
        header("Location: ../pages/reservation.php?id=<?= $hab_id ?>&checkin=<?= $checkin ?>&checkout=<?= $checkout ?>&guests=<?= $guests ?>");
        die();
    }

    header('Location: ../pages/profile_reservation_page.php');
?>