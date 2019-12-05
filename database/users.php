<?php
    include_once("../includes/database.php");

    function check_user_passwd($username, $password) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('SELECT * FROM user WHERE username = ?');
        $stmt->execute(array($username));
        $user = $stmt->fetch();

        return $user !== false && password_verify($password, $user['passwd']);
    }

    function insert_user($username, $email, $password) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('INSERT INTO user(username, passwd, joined_on) values(?, ?, ?)');

        // TODO: hash password
        $stmt->execute(array($username, $password, date('Y-m-d')));
    }

?>