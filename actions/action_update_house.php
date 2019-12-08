<?php
    include_once('../includes/database.php');
    include_once('../includes/session.php');
    include_once('../database/habitations.php');

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
        update_house($house_id,$house);
        header('Location: ../pages/profile_houses_page.php');
    } catch (PDOException $e) {
        // TODO: handle database update error 
        print_r($_POST);
        print_r($e);
    }
?>