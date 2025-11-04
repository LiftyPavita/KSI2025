<?php
// db.php - koneksi sederhana menggunakan MySQLi
$DB_HOST = "localhost";
$DB_USER = "root";        // ubah sesuai user MySQL kamu
$DB_PASS = "";            // ubah jika pakai password
$DB_NAME = "ksi2025";     // <--- nama database diupdate di sini

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($mysqli->connect_errno) {
    die("Gagal koneksi ke MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8mb4");
?>
