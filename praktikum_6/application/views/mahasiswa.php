<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <table border="1">
        <thead>
            <td>No</td>
            <td>Nim</td>
            <td>Nama</td>
            <td>Gender</td>
            <td>IPK</td>
            <td>Predikat</td>
        </thead>

        <?php
        $nomor = 1;
        foreach ($list_mhs as $mhs) {
    ?>

        <tr>
        <td><?= $nomor; ?></td>
        <td><?= $mhs->nim; ?></td>
        <td><?= $mhs->nama; ?></td>
        <td><?= $mhs->gender; ?></td>
        <td><?= $mhs->ipk; ?></td>
        <td><?= $mhs->predikat(); ?></td>
        </tr>
        
    <?php
        $nomor++; 
        }
    ?>

    </table>
    <h1>Data Dosen :</h1>
    <h5>Nama : $list_dosen->nama</h5>
    <h5>Nama : $list_dosen->mata kuliah</h5>
</body>
</html>