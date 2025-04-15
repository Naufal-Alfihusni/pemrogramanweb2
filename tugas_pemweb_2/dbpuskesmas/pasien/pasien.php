<?php include '../config/db.php'; ?>
<?php include '../templates/header.html'; ?>

<h2>Data Pasien</h2>


<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>TTL</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kelurahan</th>
        <th>Aksi</th>
    </tr>
    <?php
    $sql = "SELECT * FROM pasien";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['kode']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['tmp_lahir']}, {$row['tgl_lhir']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['email']}</td>
            <td>{$row['alamat']}</td>
            <td>{$row['kelurahan_id']}</td>
            <td>
                <a href='../pasien/edit.php?id={$row['id']}'>Edit</a> |
                <a href='../pasien/delete.php?id={$row['id']}' onclick=\"return confirm('Hapus data ini?')\">Hapus</a>
            </td>
        </tr>";
    }
    ?>
</table>

<?php include '../templates/footer.html'; ?>