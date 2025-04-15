<?php
include '../config/db.php';

$id = $_POST['id'];
$sql = "UPDATE pasien SET 
        kode='{$_POST['kode']}', nama='{$_POST['nama']}', tmp_lahir='{$_POST['tmp_lahir']}', 
        tgl_lhir='{$_POST['tgl_lhir']}', gender='{$_POST['gender']}', email='{$_POST['email']}',
        alamat='{$_POST['alamat']}', kelurahan_id={$_POST['kelurahan_id']}
        WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: ../index.php");
} else {
    echo "Error: " . $conn->error;
}
