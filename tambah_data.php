<?php
require_once 'db.php';
$nama = "Andi";
$email = "andi@example.com";

$stmt = $mysqli->prepare("INSERT INTO users (nama, email) VALUES (?, ?)");
$stmt->bind_param("ss", $nama, $email);
if ($stmt->execute()) {
    echo "Data berhasil ditambahkan (ID: " . $stmt->insert_id . ")";
} else {
    echo "Gagal menambahkan data: " . $stmt->error;
}
$stmt->close();
$mysqli->close();
?>
