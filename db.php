<?php
// db.php - koneksi sederhana menggunakan MySQLi
$DB_HOST = "localhost";
$DB_USER = "db_user";
$DB_PASS = "db_pass";
$DB_NAME = "nama_database";

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($mysqli->connect_errno) {
    die("Gagal koneksi ke MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8mb4");
