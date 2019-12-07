<?php
    include_once('../includes/session.php');
    include_once('../database/getters.php');
    include_once('../database/users.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (check_email_passwd($email, $password)) {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = get_username($email);
        header('Location: ../profile.php');
    } else {
        header('Location: ../index.php');
    }
?>