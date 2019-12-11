<?php
    include_once('../includes/session.php');
    include_once('../database/houses.php');

if (isset($_POST['title']) && 
    isset($_POST['region']) && 
    isset($_POST['location']) && 
    isset($_POST['address']) &&
    isset($_POST['capacity']) && 
    isset($_POST['n_bedrooms']) &&
    isset($_POST['n_bathrooms']) &&
    isset($_POST['price']) &&
    isset($_POST['description']) ){

        //add security checks
        $title = $_POST['title'];
        $region = $_POST['region'];
        $location = $_POST['location'];
        $address = $_POST['address'];
        $capacity = $_POST['capacity'];
        $n_rooms = $_POST['n_bedrooms'];
        $n_bath = $_POST['n_bathrooms'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        new_house($title,$region,$location,$address,$capacity,$n_rooms,$n_bath,$price,$description);

        header('Location: ../pages/profile_houses_page.php');

  
}
  
?>