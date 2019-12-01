<?php
    include_once('database/connection.php');

    // SHOULD CREATE SINGLETON INSTANCE OF DATABASE INSTEAD OF USING GLOBAL VARS

    function getRooms($location,$checkin,$checkout,$guests,$region) {
        global $db;        
        
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

    function getRoom($id)
    {
        global $db;
        $stmt = $db->prepare('SELECT title, description,location, price_per_day FROM habitation WHERE hab_id = ?');
        $stmt->execute(array($id));

        $house = $stmt->fetch();
        return $house;
    }

    function getImages($id)
    {
        global $db;
        $stmt = $db->prepare('SELECT link FROM images WHERE hab_id = ?');
        $stmt->execute(array($id));
        $images = $stmt->fetchAll();
        return $images;
    }

    function getReservations()
    {
        global $db;
        $stmt = $db->prepare('SELECT * FROM images WHERE hab_id = ?');
        $stmt->execute(array($id));
        $images = $stmt->fetchAll();
        return $images;
    }
?>