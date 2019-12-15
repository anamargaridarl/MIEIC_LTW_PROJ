<?php
    include_once('../includes/session.php');
    include_once('../database/habitations.php');
    include_once('image_creation.php');

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        http_response_code(401);
        die(header('Location: http_error_page.php'));
    }

    $title = $_POST['title'];
    $region = $_POST['region'];
    $location = $_POST['location'];
    $address = $_POST['address'];
    $capacity = $_POST['capacity'];
    $n_rooms = $_POST['n_bedrooms'];
    $n_bath = $_POST['n_bathrooms'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $n_photos = count($_FILES['h_images']['name']);
    $n_photos = $n_photos > 10 ? 10 : $n_photos;

    try {
        $hab_id = new_house($title,$region,$location,$address,$capacity,$n_rooms,$n_bath,$price,$description);
        if(!$hab_id) {
            http_response_code(500);
            die(header('Location: ../pages/http_error_page.php'));
        }

        if(!add_images($n_photos,$hab_id)) {
            $_SESSION['message'] = array('type' => 'error','content' => 'Failed to upload images.');
            header('Location: ../pages/profile_houses_page.php');
        }
        error_log("ananana");
    } catch (PDOException $e) {
        http_response_code(500);
        die(header('Location: ../pages/http_error_page.php'));
    }

    $_SESSION['message'] = array('type' => 'success','content' => 'Added new house successfully.');
    header('Location: ../pages/profile_houses_page.php');

?>
