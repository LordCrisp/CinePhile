<?php

/* -- DATABASE CONNECTION -- */
$dbServerName = "localhost";
$dbUserName = "bamse";
$dbPassword = "test";
$dbName = "class";


$dbConnect = new mysqli ($dbServerName, $dbUserName,$dbPassword, $dbName);
$dbConnect ->set_charset('UTF8');



if ($dbConnect -> connect_errno) {
    echo "Database Error - " .$dbConnect -> connect_errno;
}
