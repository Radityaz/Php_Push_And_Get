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
    
        $nama = $data["nama"];
        $umur = $data["umur"];
        $alamat = $data["alamat"];
        $foto = $data["foto"];
    
        $query = "INSERT INTO tb_siswa
            VALUES ('', '$nama', '$umur', '$alamat', '$foto')";
            
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }


?>
