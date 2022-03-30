<?php
include "config/config.php";
include "library/controller.php";

$controller = new controller();

$table = 'registrasi';

$redirect = "index.php";

if (isset($_POST['submit'])) {
    $field = array(
        'NamaLengkap' => $_POST['nama'],
        'JK' => $_POST['jk'],
        'AlamatLengkap' => $_POST['alamat'],
        'Agama' => $_POST['agama'],
        'AsalSMP' => $_POST['asalSMP'],
        'Jurusan' => $_POST['jurusan'],
    );
    $controller->add($con, $table, $field, $redirect);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Registrasi</title>
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
        <a class="navbar-brand" href="#">PPDB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Pendaftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrasi.php">Daftar Baru</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container card mt-5 p-5 shadow">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama" class="mb-2">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group mt-3">
                <label class="mb-2">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="male" value="Laki-Laki">
                    <label class="form-check-label" for="male">
                        Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="female" value="Perempuan">
                    <label class="form-check-label" for="female">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="alamat" class="mb-2">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
            </div>
            <div class="form-group mt-3">
                <label for="agama" class="mb-2">Agama</label>
                <select class="form-control" id="agama" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Khonghuchu">Khonghuchu</option>
                </select>
            </div>
            <div class="form-group mt-3">
                <label for="asalSMP" class="mb-2">Asal SMP</label>
                <input type="text" class="form-control" id="asalSMP" name="asalSMP">
            </div>
            <div class="form-group mt-3">
                <label for="jurusan" class="mb-2">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Tata Boga">Tata Boga</option>
                    <option value="Tata Busana">Tata Busana</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
        </form>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>