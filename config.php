<?php

$server = "localhost";
$username = "bluebird_user";
$password = "password";
$database = "bluebirdhotel";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// } else {
//   echo "Connected successfully.";
// }

?>
