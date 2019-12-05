<?php
    include_once('../includes/session.php');
    include_once('../database/users.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (check_user_passwd($username, $password)) {
        $_SESSION['username'] = $username;
    } else {
        header('Location: ../index.php');
    }
?>