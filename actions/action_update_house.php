<?php
    include_once('../includes/database.php');
    include_once('../includes/session.php');
    include_once('../database/habitations.php');
    include_once('image_creation.php'); //for image creation

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        http_response_code(401);
        die(header('Location: http_error_401.php'));
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

    $n_photos = count($_FILES['h_images']['name']);
    $n_photos = $n_photos > 10 ? 10 : $n_photos;

    try {
        if(!update_house($house_id,$house)) {
            http_response_code(500);
            die(header('Location: ../pages/http_error_500.php'));
        }

        if($_FILES['h_images']['name'][0] != "") {
            if(!(remove_house_images_links($house_id) && add_images($n_photos,$house_id))) {
                $_SESSION['message'] = array('type' => 'error','content' => 'Failed to replace images.');
                header('Location: ../pages/profile_houses_page.php');
            }
        }
        $_SESSION['message'] = array('type' => 'success','content' => 'Updated house successfully.');
        header('Location: ../pages/house_info_page.php?id='.$house_id);
    } catch (PDOException $e) {
        http_response_code(500);
        die(header('Location: ../pages/http_error_500.php'));
    }
?>