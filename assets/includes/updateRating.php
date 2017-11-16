<?php
session_start();
$updateRating = $_POST['$ratingSelect'];
require 'dbInfo.php';

$updateQuery = "UPDATE user_rating SET rating = ".$updateRating." WHERE user_id = ".$_SESSION['user_id'].", movie_id = ".$movieSelect." ";
$result = $dbConnect->query($updateQuery);

$updateQuery = "UPDATE user_rating SET rating = ".$updateRating." WHERE user_id = ".$_SESSION['user_id'].", movie_id = ".$movieSelect." ";
$result = $dbConnect->query($updateQuery);

print_r($updateQuery);
