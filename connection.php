<?php

$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$password = getenv("DB_PASSWORD");
$database = getenv("DB_NAME");

$connec = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($connec->connect_error) {
    die("Connection failed: " . $connec->connect_error);
}

?>
