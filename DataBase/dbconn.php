<?php

$servername = "localhost";
$user = "root";
$password = "root";
$db = "donate_lifev2";

$conn = new mysqli($servername, $user, $password, $db);

if ($conn->connect_error) {
	die("connection error");
}

?>