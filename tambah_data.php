<?php
require_once 'db.php';

// Data dummy untuk contoh
$nama = "Andi";
$email = "andi@example.com";
$alamat = "Bandar Lampung";
$telepon = "081234567890";

// Query INSERT
$stmt = $mysqli->prepare("INSERT INTO users (nama, email, alamat, telepon) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nama, $email, $alamat, $telepon);

if ($stmt->execute()) {
    echo "✅ Data berhasil ditambahkan! ID: " . $stmt->insert_id;
} else {
    echo "❌ Gagal menambahkan data: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
