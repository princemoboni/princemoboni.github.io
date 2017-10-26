<?php

$_SERVER = "localhost:8889";
$username = "root";
$password = "root";

$dbname = "Databases";

$conn = mysqli_connect($_SERVER, $username, $password, $dbname);
if (!conn) {
    die("connection failed:" . mysqli_connect_error());
}
