<?php
    include_once("../includes/database.php");


    //insert house

    //make reservation

    //check schedule

    function update_house($house_id, $house) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('UPDATE habitation
                              SET title = ?,
                                  price_per_day = ?,
                                  nr_rooms = ?,
                                  nr_bathroms = ?,
                                  capacity = ?,
                                  addr = ?,
                                  location = ?,
                                  region = ?,
                                  description = ?
                              WHERE
                                  hab_id = ?');

        $stmt->execute(array($house['title'],
                             $house['region'],
                             $house['location'],
                             $house['address'], 
                             $house['capacity'],
                             $house['n_bedrooms'],
                             $house['n_bathrooms'],
                             $house['price_p_day'],
                             $house['description'],
                             $house_id,));
    }

?>