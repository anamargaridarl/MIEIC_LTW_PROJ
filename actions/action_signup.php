<?php
    include_once('../includes/database.php');
    include_once('../includes/session.php');
    include_once('../database/users.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $hash = password_hash($password,PASSWORD_BCRYPT);
        insert_user($username, $email, $hash);
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        header('Location: ../pages/profile.php');
    } catch (PDOException $e) {
        // TODO: handle database insert error (user already exists,...)
        print_r($_POST);
        print_r($e);
    }
?>