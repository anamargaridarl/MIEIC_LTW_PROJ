<?php
    include_once('database/connection.php');

    function getRooms() {
        global $db;
        $stmt = $db->prepare('SELECT title, description, price_per_day FROM habitation');
        $stmt->execute();

        $houses = $stmt->fetchAll();
        
        return $houses;
    }
?>