<?php
    include_once('../includes/database.php');
    include_once('../includes/session.php');
    include_once('../database/habitations.php');
    include_once('image_creation.php'); //for image creation

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        http_response_code(401);
        die(header('Location: ../pages/http_error_401.php'));
    }

    $house_id = intval($_POST['house_id']);

    try {

      if(!(set_house_inactive($house_id))) {
        error_log("FAILED TO SET INACTIVE");
        $_SESSION['message'] = array('type' => 'error','content' => 'Failed to delete house.');
        header('Location: ../pages/profile_houses_page.php');
      } 
      
      if(!delete_ownership($house_id)) {
        error_log("FAILED TO DELETE OWNERSHIP");
        $_SESSION['message'] = array('type' => 'error','content' => 'Failed to delete house.');
        header('Location: ../pages/profile_houses_page.php');
      }
      
      $_SESSION['message'] = array('type' => 'success','content' => 'Updated house successfully.');
      header('Location: ../pages/profile_houses_page.php');
    
    } catch (PDOException $e) {
      http_response_code(500);
      die(header('Location: ../pages/http_error_500.php'));
  }
?>