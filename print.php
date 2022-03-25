<?php
include "config/config.php";
include "library/controller.php";

$controller = new controller();

$table = 'registrasi';

@$where = "NoDaftar = $_GET[id]";

$data = $controller->show($con, $table, $where);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title><?php echo $data['NoDaftar'] ?>-<?php echo $data['NamaLengkap'] ?></title>
</head>

<body class="bg-white">
    <div class="px-3 mt-5 text-capitalize">
        <h5 class="text-center mb-5">Penerimaan Peserta Didik Baru SMK Semangat 45</h5>

        <p class="mt-3">Yang bertanda tangan dibawah ini :</p>
        <div class="pl-3 mt-2">
            <ul style="list-style-type: none;">
                <li class="mb-2">No Pendaftaran : </span><?php echo $data['NoDaftar'] ?></li>
                <li class="mb-2">Nama Lengkap : </span><?php echo $data['NamaLengkap'] ?></li>
                <li class="mb-2">Jenis Kelamin : </span><?php echo $data['JK'] ?></li>
                <li class="mb-2">Alamat Lengkap : </span><?php echo $data['AlamatLengkap'] ?></li>
                <li class="mb-2">Agama : </span><?php echo $data['Agama'] ?></li>
                <li class="mb-2">Asal SMP : </span><?php echo $data['AsalSMP'] ?></li>
                <li>Jurusan : </span><?php echo $data['Jurusan'] ?></li>
            </ul>
        </div>

        <p class="mt-3">Dengan ini menyatakan dengan sesungguhnya :</p>
        <div class="pl-3 mt-2">
            <ol>
                <li>Segala data yang saya entrikan dalam formulir PPDB adalah Benar dan Sah.</li>
                <li>Keabsahan dokumen (dokumen asli)</li>
            </ol>
        </div>

        <div class="position-absolute text-right" style="bottom: 10px; right: 20px">
            <p>Siswa terkait,</p>
            <div style="height: 50px;"></div>
            <p><?php echo $data['NamaLengkap'] ?></p>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script>
    window.print();
    setTimeout(function() {
        window.close();
    }, 500);
</script>

</html>