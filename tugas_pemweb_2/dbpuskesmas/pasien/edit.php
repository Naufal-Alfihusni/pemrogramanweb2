<?php
include '../config/db.php';
include '../index.php';

$id = $_GET['id'];
$sql = "SELECT * FROM pasien WHERE id = $id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <label>Kode: <input type="text" name="kode" value="<?= $data['kode'] ?>" required></label><br>
    <label>Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required></label><br>
    <label>Tempat Lahir: <input type="text" name="tmp_lahir" value="<?= $data['tmp_lahir'] ?>" required></label><br>
    <label>Tanggal Lahir: <input type="date" name="tgl_lhir" value="<?= $data['tgl_lhir'] ?>" required></label><br>
    <label>Gender:
        <select name="gender">
            <option value="L" <?= $data['gender'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="P" <?= $data['gender'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
        </select>
    </label><br>
    <label>Email: <input type="email" name="email" value="<?= $data['email'] ?>"></label><br>
    <label>Alamat: <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required></label><br>
    <label>Kelurahan ID: <input type="number" name="kelurahan_id" value="<?= $data['kelurahan_id'] ?>" required></label><br>
    <input type="submit" value="Update">
</form>

<?php include '../templates/footer.html'; ?>