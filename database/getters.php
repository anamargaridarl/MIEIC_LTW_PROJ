<?php
    include_once('../includes/database.php');
    
    function getRooms($location,$checkin,$checkout,$guests,$region) {
        $db = Database::instance()->db();        
        
        $houses = [];
        if($location != NULL) {
            $stmt = $db->prepare('SELECT DISTINCT hab_id,title, description, price_per_day FROM habitation WHERE location = ? COLLATE NOCASE');
            $stmt->execute(array($location));
            $houses = $stmt->fetchAll();
        }

       if($checkin != NULL && $checkout != NULL) {
            $stmt = $db->prepare('SELECT DISTINCT hab_id,title,description,price_per_day FROM habitation,reservation WHERE hab_id = hab AND (start_date > ? OR end_date < ?)');
            $stmt->execute(array($checkout,$checkin));
            $reservationDays = $stmt->fetchAll();
            foreach($houses as $key => $value) {
                if(!in_array($value,$reservationDays)) {
                    unset($houses[$key]);
                }
            }
        }

        if($guests != NULL) {
            $stmt = $db->prepare('SELECT DISTINCT hab_id,title,description,price_per_day FROM habitation WHERE capacity >= ?');
            $stmt->execute(array($guests));
            $nGuests = $stmt->fetchAll();
            foreach($houses as $key => $value) {
                if(!in_array($value,$nGuests)) {
                    unset($houses[$key]);
                }
            }
        }

        if($region != NULL) {
            $stmt = $db->prepare('SELECT DISTINCT hab_id,title,description, price_per_day FROM habitation WHERE region = ?');
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
        $stmt = $db->prepare('SELECT DISTINCT hab_id,title,description, price_per_day FROM habitation WHERE region = ?');
        $stmt->execute(array($region));
        return $stmt->fetchAll();
    }

    function getRoom($id)
    {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT title,addr, nr_rooms,nr_bathrooms,capacity,description,region,location, price_per_day FROM habitation WHERE hab_id = ?');
        $stmt->execute(array($id));

        $house = $stmt->fetch();
        return $house;
    }

    //get images based on the id of an habitation
    function getImages($id)
    {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT link FROM images WHERE hab_id = ?');
        $stmt->execute(array($id));
        $images = $stmt->fetchAll();
        return $images;
    }


    //profile_reservation_page
    function getReservations($client_id)
    {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT title, location,price_per_day,client, hab, hab_id,nr_guests,start_date,end_date FROM habitation,reservation WHERE client = ? AND hab_id = hab');
        $stmt->execute(array($client_id));
        $reservations = $stmt->fetchAll();

        return $reservations;
    }

    function getReservationsHouse($house_id)
    {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT title, location,region,price_per_day,client, hab, hab_id,nr_guests,start_date,end_date FROM habitation,reservation WHERE hab_id = ?');
        $stmt->execute(array($house_id));
        $reservations = $stmt->fetchAll();

        return $reservations;
    }

    
    //profile_houses_page
    function get_owner_houses($owner_id)
    {
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT hab, title, addr, region,hab_id,price_per_day, capacity, location FROM ownership, habitation WHERE owner = ? and hab_id =hab');
        $stmt->execute(array($owner_id));

        $houses = $stmt->fetchAll();
        return $houses;
    }

        //profile_edit_house
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

        $username = $stmt->fetch()['username'];
        return $username;
    }
?>