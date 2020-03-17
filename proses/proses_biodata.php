<?php
    include'../koneksi/koneksi.php';
    // error_reporting(0);
        if(isset($_POST['tambah'])){
            $id=uniqid();
            $nama_saya=$_POST['nama'];
            $email_saya=$_POST['email'];
            $jenis_kelamin=$_POST['jk'];
            $alamat=$_POST['alamat'];
            $tanggal=$_POST['tanggal_lahir'];
            $tempat_lahir=$_POST['tempat_lahir'];
            $no_hp=$_POST['no_hp'];
            $hobby1=(!empty($_POST['hobby1']))?$_POST['hobby1']:'';
            $hobby2=(!empty($_POST['hobby2']))?$_POST['hobby2']:'';
            $hobby3=(!empty($_POST['hobby3']))?$_POST['hobby3']:'';
            $hobby4=(!empty($_POST['hobby4']))?$_POST['hobby4']:'';
            $hobby=($hobby1.''.$hobby2.''.$hobby3.''.$hobby4);

            $nama_file=$_FILES['foto']['name'];
        
            $format=explode(".", $nama_file);
            $fileExtension = end($format);
            $nama_sementara=$_FILES['foto']['tmp_name'];
            $md5file = md5($nama_file) . "." . $fileExtension;
            

            $lokasi_upload= "../upload/"; 

            $fungsi_upload=move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);
            

            $query=mysqli_query($koneksi,"INSERT INTO biodata VALUES('$id','','$nama_saya','$email_saya','$jenis_kelamin','$alamat','$tanggal','$tempat_lahir','$no_hp','$hobby','$md5file','')")or die(mysqli_error($query));

            if($query){

                echo'
                    <script>
                    alert("biodata berhasil di input!");
                    window.location.href="../admin/biodata.php";
                    </script>
                ';

            }else{
                echo'
                    <script>
                    alert("data gagal di input!");
                    window.location.href="../admin/biodata.php";
                    </script>
                ';
            }

            
        }
    ?>

    <?php

        function hapus($koneksi){
            if(isset($_GET['id_mahasiswa'])){

                $id=$_GET['id_mahasiswa'];
                $hapus=mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa='$id'")or die (mysqli_error($hapus));
        
                if($hapus){ ?>
                
                <script>
                alert('data berhasil dihapus');</script>
            <?php }else{?>
                <script>alert('data gagal dihapus');</script>
        
        <?php   }
        } ?>
        <?php } ?>

    