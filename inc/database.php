<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "chat";

$db = new mysqli($host, $user, $password, $database);
$db->query("SET NAMES UTF8");
?>
