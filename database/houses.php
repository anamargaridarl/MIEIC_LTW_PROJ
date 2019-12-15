<?php
    include_once("../includes/database.php");
    include_once('../includes/session.php');
    include_once('getters.php');

   function add_house_image_link($link, $hab_id) {
        $db = Database::instance()->db();
        $stmt = $db->prepare('INSERT INTO images( link, hab_id) values( ? , ? )');
        return $stmt->execute(array($link,$hab_id));
   }
   
   function new_house($title,$region,$location,$address,$capacity,$n_rooms,$n_bath,$price,$description) {
        $db = Database::instance()->db();

        $stmt = $db->prepare('INSERT INTO habitation( title, price_per_day, nr_rooms, nr_bathrooms,capacity,location,addr,region,description) values( ? , ? , ? , ? , ? , ?, ?, ?, ?)');
        if(!$stmt->execute(array($title,$price,$n_rooms,$n_bath, $capacity,$location,$address,$region, $description)))
            return false;

        $stmt2 = $db->prepare('SELECT hab_id FROM habitation WHERE title = ?');
        $stmt2->execute(array($title));
        $hab_id = $stmt2->fetch();

        $date = date('Y-m-d'); 
        $id = get_userid($_SESSION['username']);
        
        $stmt3 = $db->prepare('SELECT owner_id FROM owner WHERE owner_id = ?');
        $stmt3->execute(array($id));
        $owner_id = $stmt3->fetch();

        if(empty($owner_id))
        {
            $stmt4 = $db->prepare('INSERT INTO owner(owner_id) values(?)');
            $stmt4->execute(array($id));
        }

        $stmt5 = $db->prepare('INSERT INTO ownership( hab, owner, added_on) values(? , ? , ? )');
        $stmt5->execute(array($hab_id['hab_id'], $id, $date));
        return $hab_id['hab_id'];
   }

?>