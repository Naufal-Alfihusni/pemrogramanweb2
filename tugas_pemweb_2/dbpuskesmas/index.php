<?php include '../dbpuskesmas/config/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Data Paramedik dan Pasien</title>
  <link rel="stylesheet" href="/style.css" />
</head>

<body>
  <h2>Manajemen Puskesmas</h2>
  <a href="../dbpuskesmas/paramedik/tambah.php">+ Tambah Paramedik</a>
  <a href="../dbpuskesmas/pasien/tambah.php">+ Tambah Pasien</a>
  <hr />

  <div>
    <?php include '../dbpuskesmas/paramedik/paramedik.php'; ?>
  </div>
  <div>
    <?php include '../dbpuskesmas/pasien/pasien.php'; ?>
  </div>
</body>

</html>