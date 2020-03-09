<?php
    include'../koneksi/koneksi.php';

    

    if(isset($_POST['update'])){
        $id_pekerjaan=$_POST['id_pekerjaan'];
        $nama_pekerjaan=$_POST['nama_pekerjaan'];
        $perusahaan=$_POST['perusahaan'];
        $tahun=$_POST['tahun_bekerja'];
        $alamat=$_POST['alamat'];
        $no_hp=$_POST['no_hp'];

         // untuk mengupload file atau foto
        $nama_file=$_FILES['foto']['name'];
        $format_file=explode(".", $nama_file);
        $extension=end($format_file);
        $file_ukuran=$_FILES['foto']['size'];
        if($file_ukuran<=15000){
        $nama_sementara=$_FILES['foto']['tmp_name'];
        }else{
            echo"Gambar terlalu besar";
        }
        $encriptfile=md5($nama_file).".".$extension;
        

        $lokasiupload="../upload/pekerjaan/"; /* direktori penyimpanan*/
        $fungsi_upload=move_uploaded_file($nama_sementara, $lokasiupload.$encriptfile);

        $query_update=mysqli_query($koneksi, "UPDATE pekerjaan SET nama_pekerjaan='$nama_pekerjaan', nama_perusahaan='$perusahaan', tahun='$tahun', alamat_perusahaan='$alamat', no_hp_perusahaan='$no_hp', gambar='$encriptfile' WHERE id_pekerjaan='$id_pekerjaan'") or die(mysqli_error($query_update));

        if($query_update){
            echo'
                <script>
                    alert("data berhasil di update !");
                    window.location.href="../admin/tabel_pekerjaan.php";
                </script>
            ';
        }else{
            echo'
                <script>
                    alert("data gagal di update !");
                    window.location.href="../admin/edit_pekerjaan.php";
                </script>
            ';
        }

    }
?>