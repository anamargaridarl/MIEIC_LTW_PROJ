<?php
    include_once('../includes/session.php');
    include_once('../database/getters.php');
    include_once('../database/users.php');

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        http_response_code(401);
        die(header('Location: ../pages/http_error_401.php'));
    }
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $username = get_username($email);
    if(!$username) {
        $_SESSION['message'] = array('type' => 'error','content' => 'There is no account with that email.');
        die(header('Location: ../index.php'));
    }

    if (check_email_passwd($email, $password)) {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['message'] = array('type' => 'success','content' => 'Logged in successfully.');

        header('Location: ../pages/profile.php');
    } else {
        $_SESSION['message'] = array('type' => 'error','content' => 'Failed login: incorrect password.');
        die(header('Location: ../index.php'));
    }
?>