<?php
    if(isset($_POST['upload'])){

        $nama_file=$_FILES['foto']['name'];
        
        $format=explode(".", $nama_file);
        $fileExtension = end($format);
        $nama_sementara=$_FILES['foto']['tmp_name'];
        $md5file = md5($nama_file) . "." . $fileExtension;
        

        $lokasi_upload= "../upload/";

        $fungsi_upload=move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);

        if($fungsi_upload){

            echo'data file berhasil di upload';

        }else{
            echo'data gagal di upload';
        }



    }
?>