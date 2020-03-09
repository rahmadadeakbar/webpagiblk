<?php
    include'../koneksi/koneksi.php';

    $id_pekerjaan=$_GET['id_pekerjaan'];

    $query_hapus=mysqli_query($koneksi,"DELETE FROM pekerjaan WHERE id_pekerjaan='$id_pekerjaan'")or die(mysqli_error($query_hapus));

    if($query_hapus){
        echo'
            <script>
            alert("data berhasil dihapus!")
            window.location.href="../admin/tabel_pekerjaan.php";
            </script>
        ';
    }else{
        echo'
            <script>
            alert("data gagal dihapus!")
            window.location.href="../admin/tabel_pekerjaan.php";
            </script>
        ';
    }
?>