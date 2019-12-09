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

    function insert_user($username, $email, $hash) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('INSERT INTO user(username, email, hash, joined_on) values(?, ?, ?, ?)');

        // TODO: hash password
        $stmt->execute(array($username, $email, $hash, date('Y-m-d')));
    }

    function update_username($email, $name) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('UPDATE user SET username = ? WHERE email = ?');
        $stmt->execute(array($name, $email));
    }

    function update_passwd($email, $passwd) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('UPDATE user SET passwd = ? WHERE email = ?');
        $stmt->execute(array($passwd, $email));
    }

    function update_email($email, $new_email) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('UPDATE user SET email = ? WHERE email = ?');
        $stmt->execute(array($new_email, $email));
    }
?>