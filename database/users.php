<?php
    include_once("../includes/database.php");

    function check_email_passwd($email, $password) {
        $db = Database::instance()->db();
        
        $stmt = $db->prepare('SELECT * FROM user WHERE email = ?');
        $stmt->execute(array($email));
        $user = $stmt->fetch();

        // TODO: handle hashed passwords and csrf
        return true;
    }

    function insert_user($username, $email, $password) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('INSERT INTO user(username, email, passwd, joined_on) values(?, ?, ?, ?)');

        // TODO: hash password
        $stmt->execute(array($username, $email, $password, date('Y-m-d')));
    }

?>