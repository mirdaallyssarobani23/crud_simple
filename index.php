<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>Hello, world!</title>
</head>


<html>

<head>
    <title>Simple CRUD</title>
</head>

<body>
    <div class="container-fluid">
        <h2>Simple CRUD</h2>
        <button type="submit" class="btn btn-outline-dark mt-3 mb-3"><a href="tambah.php" style="text-decoration:none">Tambah Data</a></button>
        <button type="submit" class="btn btn-outline-dark mt-3 mb-3"><a href="tambah.php" style="text-decoration:none">Kembali</a></button>
        <h3>Data Siswa JP One</h3>
        <table cellpadding="5" cellspacing="0" align="center">
        <tr class="table-primary text-center">
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Opsi</th>
            </tr>
            <?php
            include('koneksi.php');
            $query = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY NIS") or die;
            if (mysqli_num_rows($query) == 0) {
                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            } else {
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo '<tr>';
                    echo "<td><center>$no.</center></td>";
                    echo "<td>$data[nis]</td>";
                    echo '<td>' . $data['nama'] . '</td>';
                    echo '<td><center>' . $data['kelas'] . '</center></td>';
                    echo '<td><center>' . $data['jurusan'] . '</center></td>';
                    echo '<td><center><a href="edit.php?id=' . $data['id'] . '">Edit</a> / <a href="hapus.php?id=' . $data['id'] . '"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
                    echo '</tr>';
                    $no++;
                }
            }
            ?>
        </table>
    </div>
</body>

</html>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>