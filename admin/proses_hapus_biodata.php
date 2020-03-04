<?
include'../koneksi/koneksi.php';

            if(isset($_GET['id_biodata'])){
                $id=$_GET['id_biodata'];

                $hapus=mysqli_query($koneksi,"DELETE FROM biodata WHERE id_biodata='$id'")or die(mysqli_error($hapus));

                if($hapus){
                    echo'data berhasil dihapus';
                }else{
                    echo'data gagal dihapus';
                }
            
            }
    ?>