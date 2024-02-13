<?php
$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "Houdi-ni";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
