<?php
session_start();

if (isset ($_POST['movie_id'])) {
    $movieSelect = $_POST['movie_id'];
    $_SESSION['movie_id'] = $_POST['movie_id'];
    header('location: index.php');
} else {
    header('location: index.php');
}