f<?php
    include'../koneksi/koneksi.php';

    if(isset($_POST['bayar'])){
        $kode=uniqid();
        $nama=$_POST['nama_barang'];
        $harga=$_POST['harga'];
        $kategori=$_POST['kategori'];
        $stok=$_POST['stok'];

        $query=mysqli_query($koneksi,"INSERT INTO stok VALUES('$kode','$nama','$harga','$kategori','$stok')")or die(mysqli_error(''));

        if($query){
            echo'<script>alert("data berhasil di input")
                window.location.href="../diskon.php";
            </script>';
        }else{
            echo'<script>alert("data gagal di input")
            window.location.href="../diskon.php";
        </script>';
        }
        
    }
?>