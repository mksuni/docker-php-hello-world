<?php

$conn = mysqli_init();
mysqli_real_connect($conn, getenv('DBHOST'), getenv('USER'), getenv('PASSWORD'),'flexibleserverdb', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

?>
