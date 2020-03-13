<?php

include'../koneksi/koneksi.php';

if (isset($_GET['id_biodata']) && $_GET['id_biodata'] == true && isset($_GET['foto']) && !empty($_GET['foto'])){
    $id=$_GET['id_biodata'];
    $directory = '../upload/';
    $hapus=mysqli_query($koneksi,"DELETE FROM biodata WHERE id_biodata='$id'")or die(mysqli_error($hapus));
    if (@unlink($directory.$_GET['foto'])){

        if($hapus){
            echo'data berhasil dihapus';
        }else{
            echo'data gagal dihapus';
        }
       
    } else {
        die('An error occured');
    }

   

    
}

            // if(isset($_GET['id_biodata'])){
            //     $id=$_GET['id_biodata'];

            //     $hapus=mysqli_query($koneksi,"DELETE FROM biodata WHERE id_biodata='$id'")or die(mysqli_error($hapus));

                // if($hapus){
                //     echo'data berhasil dihapus';
                // }else{
                //     echo'data gagal dihapus';
                // }
            
            // }
?>