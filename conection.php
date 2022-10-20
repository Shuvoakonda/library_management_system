<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "library_management_system";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);
if ($conn) {
    echo "conected";
} else {
    echo "not conected";
}
