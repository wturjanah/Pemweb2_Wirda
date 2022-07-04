<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen mata kuliah</title>
</head>
<body>
    <h3>Dosen Mata Kuliah</h3>

    <table border="1">
        <thead>
            <td>Semester</td>
            <td>Nama Dosen</td>
            <td>Mata Kuliah</td>
        </thead>

        <?php
        $nomor = 1;
        foreach ($list_matakuliah as $matkul) {
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