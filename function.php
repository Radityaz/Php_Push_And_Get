<?php
    $conn = mysqli_connect("localhost","root","","db_sekolah");
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
            
        }
        return $rows;
       
    }
    
    function tambah($data) {
        global $conn;
    
        $nama = htmlspecialchars($data["nama"]);
        $umur = htmlspecialchars($data["umur"]);
        $tanggal = htmlspecialchars($data["tanggal"]);
        $alamat = htmlspecialchars($data["alamat"]);    
        $foto = $data["foto"];
    
        $query = "INSERT INTO tb_siswa
            VALUES ('', '$nama', '$umur', '$alamat','$tanggal' , '$foto')";
            
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;
        $id = $data['id'];
        $nama = htmlspecialchars($data["nama"]);
        $umur = htmlspecialchars($data["umur"]);
        $alamat = htmlspecialchars($data["alamat"]);    
        $tanggal = htmlspecialchars($data["tanggal"]);  
        $foto = htmlspecialchars($data["foto"]);

        $query = "UPDATE tb_siswa
            SET nama = '$nama',  umur = '$umur', alamat = '$alamat', tanggal = '$tanggal', foto = '$foto'
            WHERE id = $id";
            
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    

    }

    function hapus($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM tb_siswa WHERE id=$id");
        return mysqli_affected_rows($conn);
    }


?>
