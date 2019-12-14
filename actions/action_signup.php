<?php
    include_once('../includes/database.php');
    include_once('../includes/session.php');
    include_once('../database/users.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $hash = password_hash($password,PASSWORD_BCRYPT);
        if(!insert_user($username, $email, $hash)) {
            $_SESSION['message'] = array('type' => 'error', 'content' => 'Failed to create account: email is already in used.');
            die(header('Location: ../index.php'));
        }

        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['message'] = array('type' => 'success','content' => 'Created new account successfully.');
        header('Location: ../pages/profile.php');
    } catch (PDOException $e) {
        http_response_code(500);
        die(header('Location: ../index.php'));
    }
?>