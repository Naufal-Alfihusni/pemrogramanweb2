<?php
include '../config/db.php';
include '../templates/header.html';

$id = $_GET['id'];
$sql = "SELECT * FROM paramedik WHERE id = $id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <label>Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required></label><br>
    <label>Gender:
        <select name="gender">
            <option value="L" <?= $data['gender'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="P" <?= $data['gender'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
        </select>
    </label><br>
    <label>Tempat Lahir: <input type="text" name="tmp_lahir" value="<?= $data['tmp_lahir'] ?>" required></label><br>
    <label>Tanggal Lahir: <input type="date" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?>" required></label><br>
    <label>Kategori:
        <select name="kategori">
            <option value="dokter" <?= $data['kategori'] == 'dokter' ? 'selected' : '' ?>>Dokter</option>
            <option value="perawat" <?= $data['kategori'] == 'perawat' ? 'selected' : '' ?>>Perawat</option>
            <option value="bidan" <?= $data['kategori'] == 'bidan' ? 'selected' : '' ?>>Bidan</option>
        </select>
    </label><br>
    <label>Telpon: <input type="text" name="telpon" value="<?= $data['telpon'] ?>" required></label><br>
    <label>Alamat: <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required></label><br>
    <label>Unit Kerja ID: <input type="number" name="unitkerja_id" value="<?= $data['unitkerja_id'] ?>" required></label><br>
    <input type="submit" value="Update">
</form>

<?php include '../templates/footer.html'; ?>