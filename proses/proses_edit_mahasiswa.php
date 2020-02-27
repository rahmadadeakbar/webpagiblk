<?php
include'../koneksi/koneksi.php';

if(isset($_POST['update'])){
    $id_mahasiswa=$_POST['id'];
    $nama=$_POST['nama_mhs'];
    $nim=$_POST['nim'];
    $jurusan=$_POST['jur'];
    $matakuliah=$_POST['matakuliah'];
    $harian=$_POST['harian'];
    $quiz=$_POST['quiz'];
    $uts=$_POST['uts'];
    $uas=$_POST['uas'];
    $hasil=($harian*0.1)+($quiz*0.15)+($uts*0.35)+($uas*0.4);

                if($hasil<=50){
                    $grade='E';
                }else if($hasil<=65){
                    $grade='D';
                }else if($hasil<=75){
                    $grade='C';
                }else if($hasil<=85){
                    $grade='B';
                }else if($hasil<=100 ||$hasil>100){
                    $grade='A';
                }

    $update =mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama',nim='$nim',jurusan='$jurusan',mata_kuliah='$matakuliah',nilai_harian='$harian',nilai_quiz='$quiz',nilai_uts='$uts',nilai_uas='$uas',hasil='$hasil', grade='$grade' WHERE id_mahasiswa='$id_mahasiswa'")or die(mysqli_error($update));
    
    if($update){
        echo'
            <script>alert("data berhasil diupdate");
            window.location.href="../mahasiswa.php"
            </script>
        ';
    }else{
        echo'
        <script>alert("data gagal diupdate");
        window.location.href="../edit_mahasiswa.php"
        </script>
    ';
    }


}

?>