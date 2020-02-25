<?php
    include'../koneksi/koneksi.php';

    if(isset($_POST['bayar'])){
        $id=uniqid();
        $nama_brg=$_POST['nama_barang'];
        $harga_barang=$_POST['harga'];
        $kategori_brg=$_POST['kategori'];
        $stok_brg=$_POST['stok'];

        $diskon=mysqli_query($koneksi,"INSERT INTO stok VALUES('$id','$nama_brg','$harga_barang','$kategori_brg','$stok_brg')")or die(mysqli_error($diskon));

        if($diskon){
            echo'data berhasil di input';
        }else{
            echo'data gagal di input';
        }
    }
?>