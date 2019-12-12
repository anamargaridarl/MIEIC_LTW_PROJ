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
        //lacks handling specific errors (ex: user always exists,email already in use, etc...)
        http_response_code(500);
        die(header('Location: ../index.php'));
    }
?>