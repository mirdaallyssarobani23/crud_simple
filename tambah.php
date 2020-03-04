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

<body>

    <div class="container-fluid">
        <h2>Simple CRUD</h2>
        <p><a href="index.php">Beranda</a> / <a href="edit.php">Tambah Data</a></p>
        <h3 class="mb-4">Tambah Data Siswa</h3>
        <form action="tambah_proses.php" method="post">
            
            <div class="row mb-3">
                <label class="col-sm-2">Nis</label>
                <input type="text" name="nis" class="form-control col-sm-4">
            </div>

            <div class="row mb-3">
                <label class="col-sm-2">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control col-sm-4">
            </div>

            <div class="row mb-3">
                <label class="col-sm-2">Kelas</label>
                <select class="col-sm-4" name="kelas">
                    <option value="">Pilih Kelas</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select><br>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2">Jurusan</label>
                <select class="col-sm-4" name="jurusan">
                    <option value="">Pilih Jurusan</option>
                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                    <option value="AP">Adminitrasi Perkantoran</option>
                    <option value="AK">Akuntansi</option>
                    <option value="PM">Pemasaran</option>
                </select><br>
            </div>

            <button type="sumbit" class="btn btn-primary" name="tambah">Tambah</button>
            <button class="btn btn-outline-dark" type="submit"><a href="login.php" style="text-decoration:none">Login</button></a>

        </form>
    </div>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>