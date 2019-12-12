<?php
    include_once('../includes/session.php');
    include_once('../database/getters.php');
    include_once('../database/users.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $username = get_username($email);
    if(!$username) {
        $_SESSION['messages'][] = array('type' => 'error','content' => 'There is no account with that email.');
        die(header('Location: ../index.php'));
    }

    if (check_email_passwd($email, $password)) {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        header('Location: ../pages/profile.php');
    } else {
        $_SESSION['messages'][] = array('type' => 'error','content' => 'Failed login: incorrect password.');
        die(header('Location: ../index.php'));
    }
?>