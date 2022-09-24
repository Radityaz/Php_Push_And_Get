<?php
    include "navbar.php";
?>

<?php
    require "function.php";

    if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'Home.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'Home.php';
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<h1>Tambah Data</h1>
    <div class="card" style="margin: 20px;" >
        <form action="" method="Post">
            <div class="formgroup">
                <label for="nama"></label>
                <input type="text" class="form-control" name="nama" placeholder="Insert Nama..." required>
            </div>
            <div class="formgroup">
                <label for="Umur"></label>
                <input type="text" class="form-control" name="umur" placeholder="Insert Umur..." required >
            </div>
            <div class="formgroup">
                <label for="Alamat"></label>
                <input type="text" class="form-control" name="alamat" placeholder="Insert Alamat..." required >
            </div>
            <div class="formgroup">
                <label for="Tanggal"></label>
                <input type="date" class="form-control" name="tanggal" placeholder="Insert Alamat..." required >
            </div>
            <div class="formgroup">
                <label for="Foto"></label>
                <input type="file" class="form-control" name="foto" placeholder="Insert Foto..." required >
            </div>
            <br>
            <button type="submit" class="btn btn-primary float-end" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>