<?php 
require "function.php";
 $id = $_GET["myid"];
  if(hapus($id)>0){
    echo"<script>
        alert('Data Berhasil Dihapus');
        document.location.href = 'Home.php';
    </script>";
  }else{
    echo"<script>
    alert('Data gagal Dihapus');
    document.location.href = 'Home.php';
</script>";
  }
?>