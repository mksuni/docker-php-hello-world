<?php

$conn = mysqli_init();
$conn->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
$conn->ssl_set($conn, NULL, "/var/www/html/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
$conn->real_connect( getenv('DBHOST'), getenv('USER'), getenv('PASSWORD'),'flexibleserverdb', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

?>
