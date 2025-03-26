<?php
require_once 'config/database.php';
$db = new Database();
if ($db->conn) {
    echo "Koneksi ke database berhasil!";
} else {
    echo "Koneksi gagal.";
}
?>