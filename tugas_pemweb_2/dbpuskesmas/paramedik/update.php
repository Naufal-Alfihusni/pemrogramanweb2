<?php
include '../config/db.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$unitkerja_id = $_POST['unitkerja_id'];

$sql = "UPDATE paramedik SET 
        nama='$nama', gender='$gender', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir',
        kategori='$kategori', telpon='$telpon', alamat='$alamat', unitkerja_id=$unitkerja_id
        WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
