<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h3>Mata Kuliah</h3>

    <table border="1">
        <thead>
            <td>Kode</td>
            <td>Nama</td>
            <td>SKS</td>
        </thead>

        <?php
        $nomor = 1;
        foreach ($list_matkul as $matkul) {
    ?>

        <tr>
        <td><?= $nomor; ?></td>
        <td><?= $matkul->nama; ?></td>
        <td><?= $matkul->sks; ?></td>
        </tr>
        
    <?php
        $nomor++; 
        }
    ?>

    </table>
</body>
</html>