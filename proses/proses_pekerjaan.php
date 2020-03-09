<?php 
    include'../koneksi/koneksi.php';

    if(isset($_POST['tambah'])){
        
        $id_pekerjaan=uniqid(); /* untuk membuat uniq id */

        // datanya diambil dari form
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
        if($file_ukuran<10000){
        $nama_sementara=$_FILES['foto']['tmp_name'];
        }else{
            echo"Gambar terlalu besar";
        }
        $encriptfile=md5($nama_file).".".$extension;
        

        $lokasiupload="../upload/pekerjaan/"; /* direktori penyimpanan*/
        $fungsi_upload=move_uploaded_file($nama_sementara, $lokasiupload.$encriptfile);

        $query_input=mysqli_query($koneksi,"INSERT INTO pekerjaan VALUES('$id_pekerjaan',NULL,'$nama_pekerjaan','$perusahaan','$tahun','$alamat','$no_hp','$encriptfile')");


        if($query_input){
            echo'<script>
                alert("data berhasil di input!");
                window.location.href="../admin/pekerjaan.php";
            </script>';
        }else{
            echo'<script>
                alert("data gagal di input!");
                window.location.href="../admin/pekerjaan.php";
            </script>';
        }
    }

?>