<?php
    include_once('../includes/session.php');
    include_once('../database/habitations.php');
    include_once('image_creation.php');

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

    function add_images($n_photos,$hab_id) {
        for($i = 0; $i < $n_photos; $i++) {
            if(!(create_image($i) && add_house_image_link($_FILES['h_images']['name'][$i],$hab_id)))
                return false;
        }
        error_log("conas");

        return true;
    }

    function create_image($i) {
        $house_path = "../images/houses/".$_FILES['h_images']['name'][$i];  
            
        switch($_FILES['h_images']['type'][$i]) {
            case 'image/jpeg':
                $original = imagecreatefromjpeg($_FILES['h_images']['tmp_name'][$i]);
                break;
            case 'image/png':
                $original = imagecreatefrompng($_FILES['h_images']['tmp_name'][$i]);
                break;
            default:
                if($_FILES['h_images']['error'][$i] == 1) {
                    $_SESSION['message'] = array('type' => 'error','content' => 'File selected is too big.');
                } else {
                    $_SESSION['message'] = array('type' => 'error','content' => 'File selected isn\'t supported.');
                }
                die(header('Location: ../pages/profile_houses_page.php'));
                break; 
        }

        $width = imagesx($original);     // width of the original image
        $height = imagesy($original);    // height of the original image
        
        $aux_width = $width;
        $aux_height = $height;
        if ($aux_width > 400) {
            $aux_width = 400;
            $aux_height = $aux_height * ( $aux_width / $width );
        }

        // Create and save a medium image
        $medium = imagecreatetruecolor($aux_width, $aux_height);
        imagecopyresized($medium, $original, 0, 0, 0, 0, $aux_width, $aux_height, $width, $height);

        switch($_FILES['h_images']['type'][$i]) {
            case 'image/jpeg':
                imagejpeg($medium, $house_path);
                break;
            case 'image/png':
                imagepng($medium, $house_path);
                break;
            default:
                break; 
        }
        return true;
    }
?>
