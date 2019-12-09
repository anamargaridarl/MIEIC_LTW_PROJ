<?php
    include_once('../includes/session.php');
    include_once('../database/users.php');

    if (isset($_POST['username'])) {
        update_username($_SESSION['email'], $_POST['username']);
        $_SESSION['username'] = $_POST['username'];
    }

    // TODO: handle password hashing
    if (isset($_POST['newpassfield']) && !empty($_POST['newpassfield']) && 
        isset($_POST['oldpassfield']) && !empty($_POST['oldpassfield']))
        update_passwd($_SESSION['email'], $_POST['oldpassfield'],$_POST['newpassfield']);

    if (isset($_POST['email'])) {
        update_email($_SESSION['email'], $_POST['email']);
        $_SESSION['email'] = $_POST['email'];
    }

    header('Location: ../pages/profile.php');
?>