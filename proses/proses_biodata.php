<?php
    include'..koneksi/koneksi.php';
    // error_reporting(0);
        if(isset($_POST['tambah'])){
            $nama_saya=$_POST['nama'];
            $email_saya=$_POST['email'];
            $jenis_kelamin=$_POST['jk'];
            $alamat=$_POST['alamat'];
            $tanggal=$_POST['tanggal_lahir'];
            $tempat_lahir=$_POST['tempat_lahir'];
            $no_hp=$_POST['no_hp'];
            $hobby=$_POST['hobby'];

            $nama_file=$_FILES['foto']['name'];
        
            $format=explode(".", $nama_file);
            $fileExtension = end($format);
            $nama_sementara=$_FILES['foto']['tmp_name'];
            $md5file = md5($nama_file) . "." . $fileExtension;
            

            $lokasi_upload= "../upload/";

            $fungsi_upload=move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);
            

            $query=mysqli_query($koneksi,"");

            
        }
    ?>