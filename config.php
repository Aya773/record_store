<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$conn = mysqli_connect("localhost", "root", "", "record_store");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
