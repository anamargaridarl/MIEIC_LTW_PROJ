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
                                  nr_bathrooms = ?,
                                  capacity = ?,
                                  addr = ?,
                                  location = ?,
                                  region = ?,
                                  description = ?
                              WHERE
                                  hab_id = ?');

        $stmt->execute(array($house['title'],
                             $house['price_p_day'],
                             $house['n_bedrooms'],
                             $house['n_bathrooms'],
                             $house['capacity'],
                             $house['address'], 
                             $house['location'],
                             $house['region'],
                             $house['description'],
                             $house_id,));
    }

?>