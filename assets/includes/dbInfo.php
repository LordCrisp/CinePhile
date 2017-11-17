<?php

if (!isset($movieSelect)) {
    $movieSelect = 1;
}

/* -- DATABASE CONNECTION -- */
$dbServerName = "localhost";
$dbUserName = "admin";
$dbPassword = "admin";
$dbName = "cinephile";


$dbConnect = new mysqli ($dbServerName, $dbUserName,$dbPassword, $dbName);
$dbConnect ->set_charset('UTF8');



if ($dbConnect -> connect_errno) {
    echo "Database Error - " .$dbConnect -> connect_errno;
}

/* -- DATABASE SELECTION VARIABLES -- */

//LIST SELECTION
$listQuery = "SELECT * FROM movie";
$listResult = $dbConnect ->query($listQuery);
//listRow variable written in loop in index



//INFO SELECTION
$infoQuery = "SELECT * FROM movie WHERE id = ".$movieSelect."";
$infoResult = $dbConnect -> query($infoQuery);
$infoRow = $infoResult->fetch_assoc();

//DIRECTOR SELECTION
$directorQuery = "SELECT * FROM movie_director INNER JOIN people ON people.id = movie_director.director WHERE movie_director.movie_id = ".$movieSelect."";
$directorResult = $dbConnect -> query($directorQuery);
$directorRow = $directorResult->fetch_assoc();

//WRITER SELECTION
$writerQuery = "SELECT * FROM movie_writer INNER JOIN people ON people.id = movie_writer.writer WHERE movie_writer.movie_id = ".$movieSelect."";
$writerResult = $dbConnect -> query($writerQuery);
$writerRow = $writerResult->fetch_assoc();

//ACTOR SELECTION
$actorQuery = "SELECT * FROM movie_actor INNER JOIN people ON people.id = movie_actor.actor WHERE movie_actor.movie_id = ".$movieSelect."";
$actorResult = $dbConnect -> query($actorQuery);
//actorRow variable written in loop in index

//MORE ACTOR SELECTION
$actorMoreQuery = "SELECT * FROM movie_actor INNER JOIN people ON people.id = movie_actor.actor WHERE movie_actor.movie_id = ".$movieSelect."";
$actorMoreResult = $dbConnect -> query($actorMoreQuery);
//actorMoreRow variable written in loop in index

//PRODUCER SELECTION
$producerQuery = "SELECT * FROM movie_producer INNER JOIN people ON people.id = movie_producer.producer WHERE movie_producer.movie_id = ".$movieSelect."";
$producerResult = $dbConnect -> query($producerQuery);
//producerRow variable written in loop in index

//SCREENWRITER SELECTION
$screenwriterQuery = "SELECT * FROM movie_screenwriter INNER JOIN people ON people.id = movie_screenwriter.screenwriter WHERE movie_screenwriter.movie_id = ".$movieSelect."";
$screenwriterResult = $dbConnect -> query($screenwriterQuery);
//screenwriterRow variable written in loop in index

//USER RATING SELECTION
$userRatingQuery = "SELECT * FROM user_rating WHERE movie_id = ".$movieSelect."";
$userRatingResult = $dbConnect -> query($userRatingQuery);
//userRatingRow variable written in loop in index

//GENRE SELECTION
$genreQuery = "SELECT * FROM movie_genre WHERE movie_id = ".$movieSelect."";
$genreResult = $dbConnect -> query($genreQuery);
//genreRow variable written in loop in index
