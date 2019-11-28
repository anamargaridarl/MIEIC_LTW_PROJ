<?php
    include_once('database/connection.php');

    function getRooms($location) {
        global $db;        
        $stmt = $db->prepare('SELECT hab_id,title, description, price_per_day FROM habitation WHERE location = ?');
        $stmt->execute(array($location));

        $houses = $stmt->fetchAll();
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
?>