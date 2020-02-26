<?php
include'../koneksi/koneksi.php';

if(isset($_GET['update'])){
    $id=$_GET['id_mahasiswa'];
    $nama=$_GET['nama'];
    $nim=$_GET['nim'];
    $jurusan=$_GET['jur'];
    $harian=$_GET['harian'];
    $quiz=$_GET['quiz'];
    $uts=$_GET['uts'];
    $uas=$_GET['uas'];
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

    $update =mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama',nim='$nim',jurusan='$jurusan',nilai_harian='$harian',nilai_quiz='$quiz',nilai_uts='$uts',nilai_uas='$uas',hasil='$hasil', grade='$grade' WHERE id_mahasiswa='$id'")or die(mysqli_error($update));
    
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