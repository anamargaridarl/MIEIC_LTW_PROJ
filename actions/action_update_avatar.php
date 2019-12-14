<?php
  include_once('../includes/session.php');
  include_once('../database/getters.php');
  include_once('../database/users.php');


  $avatar_path = "../images/avatars/".$_FILES['avatar']['name'];  
  $thumbnail_path = "../images/avatars/thumbnails/".$_FILES['avatar']['name'];

  $original;

  switch($_FILES['avatar']['type']) {
    case 'image/jpeg':
      $original = imagecreatefromjpeg($_FILES['avatar']['tmp_name']);
      break;
    case 'image/png':
      $original = imagecreatefrompng($_FILES['avatar']['tmp_name']);
    break;
    default:
      if($_FILES['avatar']['error'] == 1) {
        $_SESSION['message'] = array('type' => 'error','content' => 'File selected is too big.');
      } else {
        $_SESSION['message'] = array('type' => 'error','content' => 'File selected isn\'t supported.');
      }
      die(header('Location: ../pages/profile.php'));
    break; 
  }

  $width = imagesx($original);     // width of the original image
  $height = imagesy($original);    // height of the original image
  $square = min($width, $height);  // size length of the maximum square

  $small = imagecreatetruecolor(50, 50);
  imagecopyresized($small, $original, 0, 0, ($width>$square)?($width-$square)/2:0, ($height>$square)?($height-$square)/2:0, 50, 50, $square, $square);

  $mediumwidth = $width;
  $mediumheight = $height;
  if ($mediumwidth > 300) {
    $mediumwidth = 300;
    $mediumheight = $mediumheight * ( $mediumwidth / $width );
  }

  // Create and save a medium image
  $medium = imagecreatetruecolor($mediumwidth, $mediumheight);
  imagecopyresized($medium, $original, 0, 0, 0, 0, $mediumwidth, $mediumheight, $width, $height);

  switch($_FILES['avatar']['type']) {
    case 'image/jpeg':
      imagejpeg($medium, $avatar_path);
      imagejpeg($small, $thumbnail_path);
      break;
    case 'image/png':
      imagepng($medium, $avatar_path);
      imagepng($small, $thumbnail_path);
    break;
    default:
    break; 
  }

  if(!update_avatar($_SESSION['username'],$_FILES['avatar']['name'])) {
    die(header('Location: ../pages/profile.php'));
  }

  $_SESSION['message'] = array('type' => 'success','content' => 'Upload profile pic successfully.');
  header('Location: ../pages/profile.php');

?>


  // Move the uploaded file to its final destination
  move_uploaded_file($_FILES['image']['tmp_name'], $originalFileName);

  // Calculate width and height of medium sized image (max width: 400)
  $mediumwidth = $width;
  $mediumheight = $height;
  if ($mediumwidth > 400) {
    $mediumwidth = 400;
    $mediumheight = $mediumheight * ( $mediumwidth / $width );
  }

  // Create and save a medium image
  $medium = imagecreatetruecolor($mediumwidth, $mediumheight);
  imagecopyresized($medium, $original, 0, 0, 0, 0, $mediumwidth, $mediumheight, $width, $height);
  imagejpeg($medium, $mediumFileName);

  header("Location: index.php");
?>