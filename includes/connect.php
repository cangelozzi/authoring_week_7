<?php

$user = "root";
$pass = "root";
$host = "localhost";
$db = "db_authoring_week7";

$conn = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($conn, 'utf8');

if (!$conn) {
  echo 'Not connected';
  exit;
}

// echo 'We are connected to Backend';

// select all data from table
$myQuery = "SELECT * FROM mainmodel";
$result = mysqli_query($conn, $myQuery);
$rows = array();

while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
};

echo json_encode($rows);

?>