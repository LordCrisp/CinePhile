<?php
session_start();
require 'dbInfo.php';

$updateRating = $_POST['ratingSelect'];

/* -- CHECK IF ALREADY RATED -- */
$checkQuery = "SELECT * FROM user_rating WHERE user_id = 4 && movie_id = 3";
$checkResult = $dbConnect->query($checkQuery);
$checkRow = $checkResult -> fetch_assoc();


if(isset($checkRow)) {
    /* -- UPDATE RATING -- */

    /*$updateQuery = "UPDATE user_rating SET rating = ".$updateRating." WHERE user_id = ".$_SESSION['user_id']." && movie_id = ".$movieSelect." ";
    $result = $dbConnect->query($updateQuery);*/

    $updateQuery = "UPDATE user_rating SET rating = ".$updateRating." WHERE user_id = 4 && movie_id = 3";
    $updateResult = $dbConnect->query($updateQuery);
}

/* -- CREATE RATING -- */
else {
    /*$createQuery = "INSERT INTO user_rating (user_id, movie_id, rating) VALUES (".$_SESSION['user_id'].", ".$movieSelect.", ".$updateRating.") ";
    $createResult = $dbConnect->query($createQuery);*/

    $createQuery = "INSERT INTO user_rating (user_id, movie_id, rating) VALUES (4, 3, ".$updateRating.") ";
    $createResult = $dbConnect->query($createQuery);
}





