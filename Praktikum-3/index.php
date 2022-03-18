<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <div class="card" style="height: 100%;">
        <div class="card-header">
            Sistem Penilaian
        </div>
        <div class="card-body">
            <h4>Form Nilai Siswa</h4>
            <hr>
            <div class="d-flex justify-content-center">
                <div class="col-md-7">
                    <form method="GET" action="index.php" class="mt-3">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nama
                                Lengkap</label> <input type="text" name="name">
                            
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Mata Kuliah</label> 
                            <div class="col-8">
                                <select id="select" name="matkul" class="custom-select">
                                    <option value="DDP">Dasar-Dasar Pemrograman</option>
                                    <option value="WEB1">Pemrograman Web</option>
                                    <option value="BDI">Basis Data</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="nilai_uts" class="col-sm-4 col-form-label font-weight-bold text-right">Nilai
                                UTS</label>
                            <div class="col-sm-5">
                                <input type="text" name="uts" class="form-control" placeholder="Nilai UTS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nilai
                                UAS</label>
                            <div class="col-sm-5">
                                <input type="text" name="uas" class="form-control" placeholder="Nilai UAS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nilai
                                Tugas/Praktikum</label>
                            <div class="col-sm-5">
                                <input type="text" name="tugas" class="form-control" placeholder="Nilai Tugas">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail"
                                class="col-sm-4 col-form-label font-weight-bold text-right"></label>
                            <div class="col-sm-5">
                            <input name="proses" class="btn btn-primary" type="submit">
                            </div>
                        </div>
                    </form>
                    <?php
                    include_once 'libfungsi.php';

                        $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                        $nama_siswa = isset ($_POST['nama']) ? $_POST['nama'] : '';
                        $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                        $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                        $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                        $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';


                        if(!empty($proses)){
                            echo 'Proses: ',$proses;
                            echo '<br/>Nama siswa: ',$nama_siswa;
                            echo '<br/>Mata Kuliah: ',$mata_kuliah;
                            echo '<br/>Nilai UTS: ',$nilai_uts;
                            echo '<br/>Nilai UAS: ',$nilai_uas;
                            echo '<br/>Nilai Tugas Praktikum: ',$nilai_tugas;

                            $persen_uts = (30 / 100) * $nilai_uts;
                            $persen_uas = (35 / 100) * $nilai_uas;
                            $persen_tugas = (35 / 100) * $nilai_tugas;
                            $total_persen_kelulusan = $persen_uts + $persen_uas + $persen_tugas;


                        }

                        ?>
                </div>
                </body>
                </html>