 <!-- hasilnya dibawah ini -->
 <?php
include'../koneksi/koneksi.php';

            if(isset($_POST['input'])){
                $id_mahasiswa=uniqid();
                $nama_mhs=$_POST['nama'];
                $nim_mhs=$_POST['nim'];
                $jur_mhs=$_POST['jur'];
                $nilai_harian=$_POST['harian'];
                $nilai_quiz=$_POST['quiz'];
                $nilai_uts=$_POST['uts'];
                $nilai_uas=$_POST['uas'];
                $hasil=($nilai_harian*0.1)+($nilai_quiz*0.15)+($nilai_uts*0.35)+($nilai_uas*0.4);

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

                $query_nilai=mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('$id_mahasiswa','$nama_mhs','$nim_mhs','$jur_mhs','$nilai_harian','$nilai_quiz','$nilai_uts','$nilai_uas','$hasil','$grade')") or die (mysqli_error($query_nilai));

                if($query_nilai){
                    echo'
                        <script>alert("nilai berhasil di input")
                        window.location.href="../mahasiswa.php"
                        </script>
                    ';
                }else{
                    echo'
                        <script>alert("data gagal diinput")
                        window.location.href="../mahasiswa.php"
                        </script>
                    ';
                }

            }
        ?>