<?php
class controller {
    function index($con, $table)
    {
        $sql = "SELECT * FROM $table ORDER BY NoDaftar DESC";
        $execute = mysqli_query($con, $sql);
        while ($data = mysqli_fetch_assoc($execute))
            $isi[] = $data;
        return @$isi;
    }
    
    function add($con, $table, array $field, $redirect)
    {
        $sql = "INSERT INTO $table SET ";
        foreach ($field as $key => $value) {
            $sql .= " $key = '$value',";
        }

        $sql = rtrim($sql, ',');

        $execute = mysqli_query($con, $sql);

        if ($execute) {
            echo "<script>
                alert('Data tersimpan');
                document.location.href='$redirect';
                </script>";
        } else {
            echo "<script>
                alert('Data tidak tersimpan');
                document.location.href='$redirect';
                </script>";
        }
    }

    function show($con, $tabel, $where)
    {
        $sql = "SELECT * FROM $tabel WHERE $where";
        $execute = mysqli_query($con, $sql);
        $data = mysqli_fetch_assoc($execute);
        return $data;
    }

    function update($con, $tabel, array $field, $where, $redirect)
    {
        $sql = "UPDATE $tabel SET ";
        foreach ($field as $key => $value) {
            $sql .= " $key = '$value',";
        }
        $sql = rtrim($sql, ',');
        $sql .= " WHERE $where";
        $execute = mysqli_query($con, $sql);

        if ($execute) {
            echo "<script>alert('Berhasil diubah');document.location.href='$redirect'</script>";
        } else {
            echo "<script>alert('Gagal diubah');document.location.href='$redirect'</script>";
        }
    }

    function delete($con, $tabel, $where, $redirect)
    {
        $sql = "DELETE FROM $tabel WHERE $where";
        $execute = mysqli_query($con, $sql);
        if ($execute) {
            echo "<script>alert('Berhasil dihapus');document.location.href='$redirect'</script>";
        } else {
            echo "<script>alert('Gagal dihapus');document.location.href='$redirect'</script>";
        }
    }
}
?>