<?php
    include_once('database/connection.php');

    function getRooms() {
        $db = new PDO('sqlite:database/database.db');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $stmt = $db->prepare('SELECT hab_id,title, description, price_per_day FROM habitation');
        $stmt->execute();

        $houses = $stmt->fetchAll();
        return $houses;
    }

    function getRoom($id)
    {
        $db = new PDO('sqlite:database/database.db');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $stmt = $db->prepare('SELECT title, description,location, price_per_day FROM habitation WHERE hab_id = ?');
        $stmt->execute(array($id));

        $house = $stmt->fetch();
        return $house;
    }
    

?>