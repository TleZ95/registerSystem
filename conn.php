<?php
//localhost
$serverName = "localhost";
$userName = "root";
$userPassword = "012345678";
$dbName = "re";

//Prasong Server
//	$serverName = "localhost";
//	$userName = "prasongp_tzs";
//	$userPassword = "TrueZoneStudio852456";
//	$dbName = "prasongp_tzs";

$connection = new mysqli($serverName, $userName, $userPassword, $dbName);
if ($connection->connect_errno) {
    die("เกิดข้อผิดพลาดในการเชื่อมต่อฐานข้อมูล : (" . $connection->connect_errno . ") " . $connection->connect_error);
}

mysqli_query($connection, 'SET CHARACTER SET UTF8');
mysqli_query($connection, "SET character_set_results=utf8");
mysqli_query($connection, "SET character_set_client='utf8'");
mysqli_query($connection, "SET character_set_connection='utf8'");
mysqli_query($connection, "collation_connection = utf8_unicode_ci");
mysqli_query($connection, "collation_database = utf8_unicode_ci");
mysqli_query($connection, "collation_server = utf8_unicode_ci");
