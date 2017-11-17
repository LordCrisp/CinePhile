<?php
session_start();
require 'dbInfo.php';
$userID = $_SESSION['user_id'];
$movieSelect = $_SESSION['movie_id'];
$updateRating = $_POST['ratingSelect'];

/* -- CHECK IF ALREADY RATED -- */
$checkQuery = "SELECT * FROM user_rating WHERE user_id = 4 && movie_id = ".$movieSelect."";
$checkResult = $dbConnect->query($checkQuery);
$checkRow = $checkResult -> fetch_assoc();


if(isset($checkRow)) {
    /* -- UPDATE RATING -- */

    /*$updateQuery = "UPDATE user_rating SET rating = ".$updateRating." WHERE user_id = ".$userID." && movie_id = ".$movieSelect." ";
    $result = $dbConnect->query($updateQuery);*/

    $updateQuery = "UPDATE user_rating SET rating = ".$updateRating." WHERE user_id = 4 && movie_id = ".$movieSelect."";
    $updateResult = $dbConnect->query($updateQuery);
}

/* -- CREATE RATING -- */
else {
    /*$createQuery = "INSERT INTO user_rating (user_id, movie_id, rating) VALUES (".$user_ID.", ".$movieSelect.", ".$updateRating.") ";
    $createResult = $dbConnect->query($createQuery);*/

    $createQuery = "INSERT INTO user_rating (user_id, movie_id, rating) VALUES (4, ".$movieSelect.", ".$updateRating.") ";
    $createResult = $dbConnect->query($createQuery);
}

header('location: ../../index.php');





