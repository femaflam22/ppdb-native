<?php
include "config/config.php";
include "library/controller.php";

$controller = new controller();

$table = 'registrasi';

@$where = "NoDaftar = $_GET[id]";

$redirect = "index.php";

if (isset($_GET['delete'])) {
    $controller->delete($con, $table, $where, $redirect);
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" crossorigin="anonymous">
    <title>Dashboard</title>
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

    <div class="container mt-5">
        <table class="table table-bordered pt-4 mb-4 table-striped text-capitalize" id="myTable">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat Lengkap</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Asal SMP</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $data = $controller->index($con, $table);
                $no = 0;
                if ($data == "") {
                    echo "<tr><th colspan='8' class='text-center'>DATA TIDAK ADA</th></tr>";
                } else {
                    foreach ($data as $dt) {
                        $no++

                ?>
                        <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td><?php echo $dt['NamaLengkap'] ?></td>
                            <td><?php echo $dt['JK'] ?></td>
                            <td><?php echo $dt['AlamatLengkap'] ?></td>
                            <td><?php echo $dt['Agama'] ?></td>
                            <td><?php echo $dt['AsalSMP'] ?></td>
                            <td><?php echo $dt['Jurusan'] ?></td>
                            <td>
                                <a class="btn btn-success mr-3" href="edit.php?id=<?php echo $dt['NoDaftar'] ?>" role="button">Edit</a>
                                <a class="btn btn-danger" href="?delete&id=<?php echo $dt['NoDaftar'] ?>" onclick="return confirm(`Hapus Data Pendaftaran Siswa <?php echo  $dt['NamaLengkap'] ?> ?`)" role="button">Hapus</a>
                                <a class="btn btn-info text-white mr-3" href="print.php?id=<?php echo $dt['NoDaftar'] ?>" role="button" target="_blank">Cetak</a>
                            </td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

</html>