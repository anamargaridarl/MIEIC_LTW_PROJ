<?php
    include_once('../includes/session.php');
    include_once('../database/houses.php');

    $title = $_POST['title'];
    $region = $_POST['region'];
    $location = $_POST['location'];
    $address = $_POST['address'];
    $capacity = $_POST['capacity'];
    $n_rooms = $_POST['n_bedrooms'];
    $n_bath = $_POST['n_bathrooms'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    try {
        if(!new_house($title,$region,$location,$address,$capacity,$n_rooms,$n_bath,$price,$description)) {
            http_response_code(500);
            die(header('Location: http_error_page.php'));
        }
    } catch (PDOException $e) {
        http_response_code(500);
        die(header('Location: http_error_page.php'));
    }

    header('Location: ../pages/profile_houses_page.php');

?>