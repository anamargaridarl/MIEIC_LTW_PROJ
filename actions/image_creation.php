<?php 
  function add_images($n_photos,$hab_id) {
    for($i = 1; $i <= $n_photos; $i++) {
        $ext = "." . end(explode(".",$_FILES['h_images']['name'][$i]));
        if(!(create_image($i,$hab_id) && add_house_image_link($hab_id . "_" . $i . $ext,$hab_id)))
            return false;
    }
    error_log("conas");

    return true;
  }

  function create_image($i,$hab_id) {
    $ext = "." . end(explode(".",$_FILES['h_images']['name'][$i]));
    $house_path = "../images/houses/" . $hab_id . "_" . $i . $ext;  
        
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
