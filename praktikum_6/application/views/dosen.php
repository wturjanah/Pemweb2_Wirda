<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h3>Nama Dosen</h3>

    <table border="1">
        <thead>
            <td>No</td>
            <td>Nama</td>
            <td>Mata Kuliah</td>
            <td>Gender</td>
        </thead>

        <?php
        $nomor = 1;
        foreach ($list_dsn as $dsn) {
    ?>

        <tr>
        <td><?= $nomor; ?></td>
        <td><?= $dsn->nama; ?></td>
        <td><?= $dsn->matakuliah; ?></td>
        <td><?= $dsn->gender; ?></td>
        </tr>
        
    <?php
        $nomor++; 
        }
    ?>

    </table>
</body>
</html>