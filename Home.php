<?php
    $nama = "Riko";
    $nama1 = "Aditya";
    $nama2 = "Zaki";
    $topnamageminx = [
        [
            "name"=>"Agung",
            "place"=>"Kudus",
            "image"=>"slebew.jpg"
        ],
        [
            "name"=>"Riko",
            "place"=>"Temanggung",
            "image"=>"spongebob.png"
        ],
        [
            "name"=>"Tyo",
            "place"=>"Kudus",
            "image"=>"ulat.jpg"
        ],
        [
            "name"=>"Daffa",
            "place"=>"Kudus",
            "image"=>"rehandance.gif"
        ]

    ];


    require "function.php";
    $datasiswa2 = query("SELECT * FROM tb_siswa");

?>

<?php
    include "navbar.php";
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <h1>List Data</h1>
    <div class="tableview">
    <table class="table" >
        <tr class="head" >
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Umur</td>
            <td>Tanggal</td>
            <!-- <td>Gambar</td> -->
            <td>Aksi</td>
        </tr>
        <?php
        $nomor = 1;
            foreach ($datasiswa2 as $siswa) {
            
        ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $siswa["nama"]; ?></td>
                <td><?= $siswa["alamat"]; ?></td>
                <td><?= $siswa["umur"]; ?></td>
                <td><?= $siswa["tanggal"]; ?></td>
                <!-- <td><img src="<?= $siswa["foto"];?>" style="height: 100px; width: 100px"></td> -->
                <td>
                    <a type="button" class="btn btn-warning" href="ubah.php? myid= <?=$siswa["id"]?>" >Ubah</a>
                    <a type="button" class="btn btn-info" href="" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $siswa['id']; ?>">Detail</a>
                    <a type="button" class="btn btn-danger" href="hapus.php? myid= <?=$siswa["id"]?> ">Hapus</a>
                </td>
            </tr>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?= $siswa['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="formgroup">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $siswa["nama"]; ?>" readonly>
            </div>
            <div class="formgroup">
                <label>Umur</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $siswa["alamat"]; ?>" readonly>
            </div>
            <div class="formgroup">
                <label>Alamat</label>
                <input type="text" class="form-control" name="umur" id="umur" value="<?= $siswa["umur"]; ?>" readonly>
            </div>
            <div class="formgroup">
                <label>Tanggal</label>
                <input type="text" class="form-control" name="tanggal" id="tanggal" value="<?= $siswa["tanggal"]; ?>" readonly>
            </div>
            <div class="formgroup">
                <label>Foto</label>
                <img src="<?= $siswa["foto"];?>" style="height: 100px; width: 100px">
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
            <?php
                }
            ?>

    </table>
    </div>
</body>
</html>