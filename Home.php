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
    <h1>List Data</h1>
    <div class="tableview">
    <table class="table" >
        <tr class="head" >
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Umur</td>
            <td>Gambar</td>
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
                <td><img src="<?= $siswa["foto"];?>" style="height: 100px; width: 100px"></td>
            </tr>
        <?php
            }
        ?>

    </table>
    </div>
</body>
</html>