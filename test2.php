<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
    <style>
        .d-flex {
            display: flex;
        }
    </style>
</head>

<body>
    <!-- method post -->
    <form action="logic.php" method="post">
        <div class="d-flex">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div class="d-flex">
            <label for="nik">NIK</label>
            <input type="number" name="nik" id="nik">
        </div>
        <div class="d-flex">
            <label for="ttl">Tempat Tanggal Lahir</label>
            <input type="date" name="ttl" id="ttl">
        </div>
        <label>Jenis Kelamin</label>
        <div class="d-flex">
            <label for="male">Laki-Laki</label>
            <input type="radio" name="jk" id="male">
        </div>
        <div class="d-flex">
            <label for="female">Perempuan</label>
            <input type="radio" name="jk" id="female">
        </div>
        <div class="d-flex">
            <label for="golongan_darah">Golongan Darah</label>
            <select name="golongan_darah" id="golongan_darah">
                <option value="A">A</option>
                <option value="O">O</option>
                <option value="B">B</option>
            </select>
        </div>
        <div class="d-flex">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" rows="3"></textarea>
        </div>
        <div class="d-flex">
            <label for="agama">Agama</label>
            <select name="agama" id="agama">
                <option value="Islam">Islam</option>
                <option value="Protestan">Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Khonghuchu">Khonghuchu</option>
            </select>
        </div>
        <div class="d-flex">
            <label for="status_perkawinan">Status Perkawinan</label>
            <select name="status_perkawinan" id="status_perkawinan">
                <option value="KAWIN">KAWIN</option>
                <option value="BELUM KAWIN">BELUM KAWIN</option>
            </select>
        </div>
        <div class="d-flex">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan">
        </div>
        <div class="d-flex">
            <label for="kewarganegaraan">Kewarganegaraan</label>
            <input type="text" name="kewarganegaraan" id="kewarganegaraan">
        </div>
        <div class="d-flex">
            <label for="berlaku_hingga">Berlaku Hingga</label>
            <input type="date" name="berlaku_hingga" id="berlaku_hingga">
        </div>
        <button type="submit" name="submit">Simpan</button>
    </form>

    <!-- method get -->
    <form method="get">
        <div class="d-flex">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div class="d-flex">
            <label for="nik">NIK</label>
            <input type="number" name="nik" id="nik">
        </div>
        <div class="d-flex">
            <label for="ttl">Tempat Tanggal Lahir</label>
            <input type="date" name="ttl" id="ttl">
        </div>
        <label>Jenis Kelamin</label>
        <div class="d-flex">
            <label for="male">Laki-Laki</label>
            <input type="radio" name="jk" id="male">
        </div>
        <div class="d-flex">
            <label for="female">Perempuan</label>
            <input type="radio" name="jk" id="female">
        </div>
        <div class="d-flex">
            <label for="golongan_darah">Golongan Darah</label>
            <select name="golongan_darah" id="golongan_darah">
                <option value="A">A</option>
                <option value="O">O</option>
                <option value="B">B</option>
            </select>
        </div>
        <div class="d-flex">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" rows="3"></textarea>
        </div>
        <div class="d-flex">
            <label for="agama">Agama</label>
            <select name="agama" id="agama">
                <option value="Islam">Islam</option>
                <option value="Protestan">Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Khonghuchu">Khonghuchu</option>
            </select>
        </div>
        <div class="d-flex">
            <label for="status_perkawinan">Status Perkawinan</label>
            <select name="status_perkawinan" id="status_perkawinan">
                <option value="KAWIN">KAWIN</option>
                <option value="BELUM KAWIN">BELUM KAWIN</option>
            </select>
        </div>
        <div class="d-flex">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan">
        </div>
        <div class="d-flex">
            <label for="kewarganegaraan">Kewarganegaraan</label>
            <input type="text" name="kewarganegaraan" id="kewarganegaraan">
        </div>
        <div class="d-flex">
            <label for="berlaku_hingga">Berlaku Hingga</label>
            <input type="date" name="berlaku_hingga" id="berlaku_hingga">
        </div>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>

</html>