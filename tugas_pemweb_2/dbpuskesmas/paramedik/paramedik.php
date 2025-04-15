<?php include '../config/db.php'; ?>

<h2>Data Paramedik</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>TTL</th>
        <th>Kategori</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Unit Kerja</th>
        <th>Aksi</th>
    </tr>
    <?php
    $sql = "SELECT * FROM paramedik";
    $result = $conn->query($sql);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['tmp_lahir']}, {$row['tgl_lahir']}</td>
                <td>{$row['kategori']}</td>
                <td>{$row['telpon']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['unitkerja_id']}</td>
                <td>
                    <a href='paramedik/edit.php?id={$row['id']}'>Edit</a> |
                    <a href='paramedik/delete.php?id={$row['id']}' onclick=\"return confirm('Hapus data ini?')\">Hapus</a>
                </td>
            </tr>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
    ?>
</table>