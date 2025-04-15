<?php include '../index.php'; ?>

<form method="POST" action="tambah.php">
    <label>Nama: <input type="text" name="nama" required></label><br>
    <label>Gender:
        <select name="gender">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </label><br>
    <label>Tempat Lahir: <input type="text" name="tmp_lahir" required></label><br>
    <label>Tanggal Lahir: <input type="date" name="tgl_lahir" required></label><br>
    <label>Kategori:
        <select name="kategori">
            <option value="dokter">Dokter</option>
            <option value="perawat">Perawat</option>
            <option value="bidan">Bidan</option>
        </select>
    </label><br>
    <label>Telpon: <input type="text" name="telpon" required></label><br>
    <label>Alamat: <input type="text" name="alamat" required></label><br>
    <label>Unit Kerja ID: <input type="number" name="unitkerja_id" required></label><br>
    <input type="submit" value="Simpan">
</form>

<?php include '../templates/footer.html'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../config/db.php';
    $sql = "INSERT INTO paramedik (nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unitkerja_id)
            VALUES (
                '{$_POST['nama']}', '{$_POST['gender']}', '{$_POST['tmp_lahir']}', '{$_POST['tgl_lahir']}',
                '{$_POST['kategori']}', '{$_POST['telpon']}', '{$_POST['alamat']}', {$_POST['unitkerja_id']}
            )";
    if ($conn->query($sql)) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>