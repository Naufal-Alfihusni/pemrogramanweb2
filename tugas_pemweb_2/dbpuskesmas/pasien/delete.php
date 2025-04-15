<?php
include '../config/db.php';
$id = $_GET['id'];
$sql = "DELETE FROM pasien WHERE id = $id";
if ($conn->query($sql)) {
    header("Location: ../index.php");
} else {
    echo "Gagal menghapus data: " . $conn->error;
}
