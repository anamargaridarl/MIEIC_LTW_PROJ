<?php
    include_once("../includes/database.php");

    function check_email_passwd($email, $password) {
        $db = Database::instance()->db();
        
        $stmt = $db->prepare('SELECT hash FROM user WHERE email = ? ');
        $stmt->execute(array($email));
        $hash = $stmt->fetch();
        // TODO: handle csrf
        if(!$hash)
            return $hash;
        else
            return password_verify($password,$hash['hash']);
    }

    function insert_user($username, $email, $hash) {
        $db = Database::instance()->db();

        $username = get_username($email);

        if($username)
            return false;

        $stmt = $db->prepare('INSERT INTO user(username, email, hash, joined_on) values(?, ?, ?, ?)');

        return $stmt->execute(array($username, $email, $hash, date('Y-m-d')));
    }

    function update_username($email, $name) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('UPDATE user SET username = ? WHERE email = ?');
        return $stmt->execute(array($name, $email));
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
        return $stmt->execute(array($new_email, $email));
    }

    function reserve_room($email, $guests, $hab_id, $checkin, $checkout) {
        $db = Database::instance()->db();
        
        $stmt = $db->prepare('SELECT user_id FROM user WHERE email = ?');
        $stmt->execute(array($email));
        $user_id = $stmt->fetch()['user_id'];

        $stmt = $db->prepare('INSERT INTO reservation (nr_guests,hab,client,start_date,end_date) VALUES (?,?,?,?,?)');
        $stmt->execute(array($guests, $hab_id, $user_id, $checkin, $checkout));
    }
?>