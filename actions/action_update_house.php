<?php
    include_once('../includes/database.php');
    include_once('../includes/session.php');
    include_once('../database/habitations.php');

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        http_response_code(401);
        die(header('Location: http_error_page.php'));
    }

    $house_id = $_GET['id'];
    $house['title'] = $_POST['title'];
    $house['region'] = $_POST['region'];
    $house['location'] = $_POST['location'];
    $house['address'] = $_POST['address'];
    $house['capacity'] = $_POST['capacity'];
    $house['n_bathrooms'] = $_POST['n_bathrooms'];
    $house['n_bedrooms'] = $_POST['n_bedrooms'];
    $house['price_p_day'] = $_POST['price'];
    $house['description'] = $_POST['description'];

    try {
        if(!update_house($house_id,$house)) {
            http_response_code(500);
            die(header('Location: http_error_page.php'));
        }
        $_SESSION['message'] = array('type' => 'success','content' => 'Updated house successfully.');
        header('Location: ../pages/house_info_page.php?id='.$house_id); // change to edit_house_page
    } catch (PDOException $e) {
        http_response_code(500);
        die(header('Location: http_error_page.php'));
    }
?>