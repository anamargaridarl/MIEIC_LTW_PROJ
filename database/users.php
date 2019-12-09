<?php
    include_once("../includes/database.php");

    function check_email_passwd($email, $password) {
        $db = Database::instance()->db();
        
        $stmt = $db->prepare('SELECT hash FROM user WHERE email = ? ');
        $stmt->execute(array($email));
        $hash = $stmt->fetch();
        // TODO: handle csrf
        return password_verify($password,$hash['hash']);
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

    function update_passwd($email, $oldpasswd,$newpasswd) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT hash FROM user WHERE email = ? ');
        $stmt->execute(array($email));
        $hash = $stmt->fetch();

        if(password_verify($oldpasswd,$hash['hash'])) {
            $hash = password_hash($newpasswd,PASSWORD_BCRYPT);
            $stmt = $db->prepare('UPDATE user SET hash = ? WHERE email = ?');
            $stmt->execute(array($hash, $email));
            return true;
        }
        else return false;
    }

    function update_email($email, $new_email) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('UPDATE user SET email = ? WHERE email = ?');
        $stmt->execute(array($new_email, $email));
    }
?>