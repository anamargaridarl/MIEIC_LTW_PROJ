<?php
    include_once('../includes/database.php');
    
    function getRooms($location,$checkin,$checkout,$guests,$region) {
        $db = Database::instance()->db();        
        
        $houses = [];
        if($location != NULL) {
            $stmt = $db->prepare('SELECT DISTINCT hab_id,title, description, price_per_day FROM habitation WHERE location = ? COLLATE NOCASE AND active = 1');
            $stmt->execute(array($location));
            $houses = $stmt->fetchAll();
        }

        if($checkin != NULL && $checkout != NULL) {
            $stmt = $db->prepare('SELECT * FROM habitation, reservation WHERE hab_id = hab and location = ? and active = 1');
            $stmt->execute(array($location));
            $reservations = $stmt->fetchAll();

            if (!empty($reservations)) {
                $stmt = $db->prepare('SELECT DISTINCT hab_id,title,description,price_per_day 
                                         FROM habitation,reservation 
                                         WHERE hab_id = hab AND active = 1
                                         AND hab IN 
                                         (SELECT hab FROM reservation 
                                         EXCEPT SELECT hab FROM reservation 
                                         WHERE (start_date < ? AND end_date > ?) OR (end_date > ? AND start_date < ?) OR (start_date > ? AND end_date < ?))');
                 $stmt->execute(array($checkin,$checkin,$checkout,$checkout,$checkin,$checkout));
                 $reservationDays = $stmt->fetchAll();
                 
                 foreach ($houses as $key => $value) {
                     if (!in_array($value,$reservationDays)) {
                         unset($houses[$key]);
                     }
                 }
            }

        }

        if($guests != NULL) {
            $stmt = $db->prepare('SELECT DISTINCT hab_id,title,description,price_per_day FROM habitation WHERE capacity >= ? AND active = 1');
            $stmt->execute(array($guests));
            $nGuests = $stmt->fetchAll();
            foreach($houses as $key => $value) {
                if(!in_array($value,$nGuests)) {
                    unset($houses[$key]);
                }
            }
        }

        if($region != NULL) {
            $stmt = $db->prepare('SELECT DISTINCT hab_id,title,description, price_per_day FROM habitation WHERE region = ? AND active = 1');
            $stmt->execute(array($region));
            $inRegion = $stmt->fetchAll();
            foreach($houses as $key => $value) {
                if(!in_array($value,$inRegion)) {
                    unset($houses[$key]);
                }
            }
        }

        return $houses;
    }

    function getRoomsByRegion($region) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT DISTINCT hab_id,title,description, price_per_day FROM habitation WHERE region = ? AND active = 1');
        $stmt->execute(array($region));
        return $stmt->fetchAll();
    }

    function getRoom($id) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT hab_id,title,addr, nr_rooms,nr_bathrooms,capacity,description,region,location, price_per_day FROM habitation WHERE hab_id = ? AND active = 1');
        $stmt->execute(array($id));

        $house = $stmt->fetch();
        return $house;
    }

    function getImages($id) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT link FROM images WHERE hab_id = ?');
        $stmt->execute(array($id));
        $images = $stmt->fetchAll();
        return $images;
    }

    function getReservations($client_id) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT title, location,price_per_day,client, hab, hab_id,nr_guests,start_date,end_date FROM habitation,reservation WHERE client = ? AND hab_id = hab');
        $stmt->execute(array($client_id));
        $reservations = $stmt->fetchAll();

        return $reservations;
    }

    function getReservationsHouse($house_id) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT title, location,region,price_per_day,client, hab, hab_id,nr_guests,start_date,end_date , julianday(end_date) - julianday(start_date)  as dif 
        FROM habitation,reservation WHERE hab_id = ? and hab = hab_id');
        $stmt->execute(array($house_id));
        $reservations = $stmt->fetchAll();

        return $reservations;
    }

    function getClientName($client_id) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT username FROM user,client WHERE user_id = client_id AND client_id = ?');
        $stmt->execute(array($client_id));
        $guest = $stmt->fetch();
        if(!$guest)
            return false;
        else
        return $guest['username'];
    }
    
    function get_owner_houses($owner_id) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT hab, title, addr, region,hab_id,price_per_day, capacity, location FROM ownership, habitation WHERE owner = ? and hab_id =hab');
        $stmt->execute(array($owner_id));

        $houses = $stmt->fetchAll();
        return $houses;
    }

    function get_owner_house($owner_id,$house_id) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT hab_id, title, addr,region, price_per_day, capacity, nr_rooms, nr_bathrooms, description, location FROM ownership, habitation WHERE owner = ? and hab_id = ? and hab_id = hab');
        $stmt->execute(array($owner_id,$house_id));

        $house = $stmt->fetchAll();
        return $house[0];
    }

    function get_username($email) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT username FROM user WHERE email = ?');
        $stmt->execute(array($email));

        $username = $stmt->fetch();
        if(!$username)
            return $username;
        else
            return $username['username'];
    }

    function get_userid($username) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT user_id FROM user WHERE username = ?');
        $stmt->execute(array($username));

        $owner_id = $stmt->fetch();
        return $owner_id['user_id'];
    }

    function getHouseOwnerEmail($house_id) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT email FROM ownership, user where user.user_id = ownership.owner and hab = ?');
        $stmt->execute(array($house_id));

        $owner = $stmt->fetch()['email'];
        return $owner;
    }
    
    function get_owner_name($house_id) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT username FROM user,ownership WHERE hab = ? and user_id = owner');
        $stmt->execute(array($house_id));

        $owner_id = $stmt->fetch();
        return $owner_id['username'];
    }
?>