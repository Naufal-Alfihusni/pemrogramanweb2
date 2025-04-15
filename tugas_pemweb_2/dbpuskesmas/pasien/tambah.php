<?php include '../index.php'; ?>

<form method="POST" action="tambah.php">
    <label>Kode: <input type="text" name="kode" required></label><br>
    <label>Nama: <input type="text" name="nama" required></label><br>
    <label>Tempat Lahir: <input type="text" name="tmp_lahir" required></label><br>
    <label>Tanggal Lahir: <input type="date" name="tgl_lhir" required></label><br>
    <label>Gender:
        <select name="gender">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </label><br>
    <label>Email: <input type="email" name="email"></label><br>
    <label>Alamat: <input type="text" name="alamat" required></label><br>
    <label>Kelurahan ID: <input type="number" name="kelurahan_id" required></label><br>
    <input type="submit" value="Simpan">
</form>

<?php include '../templates/footer.html'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../config/db.php';
    $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lhir, gender, email, alamat, kelurahan_id)
            VALUES (
                '{$_POST['kode']}', '{$_POST['nama']}', '{$_POST['tmp_lahir']}', '{$_POST['tgl_lhir']}',
                '{$_POST['gender']}', '{$_POST['email']}', '{$_POST['alamat']}', {$_POST['kelurahan_id']}
            )";
    if ($conn->query($sql)) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>