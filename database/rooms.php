<?php
    include_once('database/connection.php');

    function getRooms() {
        global $db;
        $stmt = $db->prepare('SELECT * FROM habitation');
        $stmt->execute();

        $houses = $stmt->fetchAll();
        
        return $houses;
    }
?>