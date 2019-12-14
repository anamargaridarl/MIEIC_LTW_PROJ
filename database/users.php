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

    function getProfileAvatarLink($username) {
        $profile_avatar_path = "../images/avatars/";
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT link FROM avatar, user WHERE username = ? and avatar.user_id = user.user_id');
        $stmt->execute(array($username));
        $avatar = $stmt->fetch();
        return $profile_avatar_path . $avatar['link'];
    }

    function getThumbnailLink($username) {
        $thumbnail_avatar_path = "../images/avatars/thumbnails/";
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT link FROM avatar, user WHERE username = ? and avatar.user_id = user.user_id');
        $stmt->execute(array($username));
        $avatar = $stmt->fetch();
        return $thumbnail_avatar_path . $avatar['link'];
    }

    function update_avatar($username, $link_avatar) {
        
        $user_id = get_ownerid($username);
        $db = Database::instance()->db();
        $stmt = $db->prepare('UPDATE avatar SET link = ? WHERE user_id = ?');
        return $stmt->execute(array($link_avatar,$user_id));
    }
?>