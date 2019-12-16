<?php
    include_once('../includes/session.php');
    include_once('../database/users.php');

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        http_response_code(401);
        die(header('Location: ../pages/http_error_401.php'));
    }

    if(!check_email_passwd($_SESSION['email'],$_POST['currpass'])) {
        $_SESSION['message'] = array('type' => 'error', 'content' => 'Failed to edit profile: incorrect password');
        die(header('Location: ../pages/profile.php'));
    }

    try {

        if (isset($_POST['username']) && $_POST['username'] != $_SESSION['username']) {
            if(!update_username($_SESSION['email'], $_POST['username'])) {
                http_response_code(500);
                die(header('Location: ../pages/http_error_500.php'));
            }

            $_SESSION['username'] = $_POST['username'];
        }

        if (isset($_POST['newpassfield']) && !empty($_POST['newpassfield']) ) {
            if(!update_passwd($_SESSION['email'], $_POST['currpass'],$_POST['newpassfield'])) {
                http_response_code(500);
                die(header('Location: ../pages/http_error_500.php'));
            }

        }

        if (isset($_POST['email']) && $_POST['email'] != $_SESSION['email']) {
            if(!update_email($_SESSION['email'], $_POST['email'])) {
                http_response_code(500);
                die(header('Location: ../pages/http_error_500.php'));  
            }

            $_SESSION['email'] = $_POST['email'];
        }
    } catch (PDOException $e) {
        http_response_code(500);
        die(header('Location: ../pages/http_error_500.php'));
    }
    
    $_SESSION['message'] = array('type' => 'success','content' => 'Updated profile successfully.');
    header('Location: ../pages/profile.php');
?>