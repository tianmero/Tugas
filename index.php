<!DOCTYPE html>
<html>
<head>
    <title>PENDAFTARAN MAHASISWA BARU</title>
</head>

<body>
    <header>
        <h3>PENDAFTARAN MAHASISWA BARU</h3>
    </header>

    <h4>MENU</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>