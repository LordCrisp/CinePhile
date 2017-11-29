<?php

/* -- DATABASE CONNECTION -- */
$dbServerName = "localhost";
$dbUserName = "admin";
$dbPassword = "admin";
$dbName = "afrika";


$dbConnect = new mysqli ($dbServerName, $dbUserName,$dbPassword, $dbName);
$dbConnect ->set_charset('UTF8');



if ($dbConnect -> connect_errno) {
    echo "Database Error - " .$dbConnect -> connect_errno;
} else {
  echo " You have been connected!"
}
