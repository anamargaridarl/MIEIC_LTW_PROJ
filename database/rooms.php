<?php
    include_once('database/connection.php');

    function getRooms($location) {
        global $db;
        $stmt = $db->prepare('SELECT title, description, price_per_day FROM habitation WHERE location = ?');
        $stmt->execute(array($location));

        $houses = $stmt->fetchAll();
        
        return $houses;
    }

    function getRoom($id) {
        global $db;
        $stmt = $db->prepare('SELECT title, description, price_per_day FROM habitation WHERE hab_id = ?');
        $stmt->execute(array($id));

        $houses = $stmt->fetch();
        
        return $houses;
    }
?>